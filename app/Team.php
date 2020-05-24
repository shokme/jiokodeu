<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Team extends Model
{
    use HasUsers;

    protected $guarded = [];

    public function switchOwner($email)
    {
        // TODO: test
        $user = User::select('id')->firstWhere('email', $email)->get();
        if ($user) {
            $this->owner_id = $user->id;
            $this->save();
        }

        throw new ModelNotFoundException();
    }

    public function apiKeys($userId)
    {
        $members = $this->users()->with('tokens')->whereNotIn('id', [$userId])->get();

        return $members->flatMap(fn($user) => $user->apiKeys())->all();
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
