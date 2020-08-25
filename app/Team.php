<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    use HasUsers;

    protected $guarded = [];

    public function switchOwner($email)
    {
        $user = User::select('id')->firstWhere('email', $email);
        if ($user) {
            $this->owner_id = $user->id;
            $this->save();
            return;
        }

        throw new ModelNotFoundException();
    }

    public function membersTokens(int $userId)
    {
        return $this->users()->whereHas('tokens')->where('id', '!=', $userId)->get();
    }

    public function apiKeys($tokens): array
    {
        if (is_null($tokens)) {
            return [];
        }
        return $tokens->flatMap(fn($user) => $user->apiKeys())->all();
    }

    public function apiDailyUse(Collection $tokens): array
    {
        $tokens = $tokens->flatMap(function ($user) {
            return $user->tokens->map(function ($token) {
                return $token->id.'|'.$token->token;
            });
        })->all();

        $uses = PayAsYouGo::select('token', 'request_count', DB::raw('DATE(timestamp) as date'))->whereIn('token', $tokens)->get();

        return $uses->groupBy('date')->map(function ($usage) {
            return $usage->map(function ($item) {
                return $item->request_count;
            })->sum();
        })->all();
    }

    public function monthlyRequests()
    {
        $requests = PayAsYouGo::query()
            ->select('user_id', 'request_count', 'due_date')
            ->whereBetween('due_date', [today()->firstOfMonth(), today()->endOfMonth()])
            ->where('team_id', $this->id)
            ->get();

        return $requests->groupBy('due_date')->map->pluck('request_count')->map->sum()->map(function ($count) {
            return ($count - Metered::FREE_CALLS) <= 0 ? 0 : ($count - Metered::FREE_CALLS);
        })->flatten()->sum();
    }
}
