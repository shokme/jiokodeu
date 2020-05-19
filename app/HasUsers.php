<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

trait HasUsers
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}