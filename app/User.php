<?php

namespace App;

use App\Policies\ProjetPolicy;
use App\Policies\UserPolicy;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Projet::class => ProjetPolicy::class,
        User::class => UserPolicy::class,
    ];
    
    /**
     * Get the associated projet
     */
    public function projet()
    {
        return $this->hasMany(Projet::class);
    }
    
    /**
     * Check if current user is admin.
     * @return boolean
     */
    public function isAdmin()
    {
        return (bool) $this->admin;
    }
}
