<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasUsers;

    protected $guarded = [];
}
