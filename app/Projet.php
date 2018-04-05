<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    /**
     * Get the associated user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
