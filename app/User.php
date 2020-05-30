<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Order\Contracts\ProvidesInvoiceInformation;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\NewAccessToken;

class User extends Authenticatable implements ProvidesInvoiceInformation
{
    use HasApiTokens, Notifiable, Billable, HasTeams;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'current_team_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Create a new personal access token for the user.
     *
     * @param  string  $name
     * @param  array  $abilities
     * @return \Laravel\Sanctum\NewAccessToken
     */
    public function createToken(string $name, array $abilities = ['*'])
    {
        $token = $this->tokens()->create([
            'name' => $name,
            'token' => $plainTextToken = Str::random(36),
            'abilities' => $abilities,
        ]);

        return new NewAccessToken($token, $token->id.'|'.$plainTextToken);
    }

    public function apiKeys()
    {
        return $this->tokens->map(function ($token) {
            return [
                'id' => $token->id,
                'hash' => $token->token
            ];
        })->all();
    }

    public function apiDailyUse(): array
    {
        $tokens = $this->tokens->map(function ($token) {
            return $token->id.'|'.$token->token;
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
        $requests = $this->payasyougo()->select('request_count')->whereBetween('due_date', [today()->firstOfMonth(), today()->endOfMonth()])->get();

        return $requests->pluck('request_count')->map(function ($count) {
            return ($count - Metered::FREE_CALLS) <= 0 ? 0 : ($count - Metered::FREE_CALLS);
        })->sum();
    }

    public function getInvoiceInformation()
    {
        return [$this->name, $this->email];
    }

    public function getExtraBillingInformation()
    {
        return null;
    }

    public function payasyougo()
    {
        return $this->hasMany(PayAsYouGo::class);
    }
}
