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
        if($user) {
            $this->owner_id = $user->id;
            $this->save();
        }

        throw new ModelNotFoundException();
    }
}
