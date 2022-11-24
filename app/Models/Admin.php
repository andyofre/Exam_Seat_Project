<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use illuminate\Foundation\Auth\User as  Authenticatable;
use Illuminate\Notifications\Notifiable;


class Admin extends Model
{
    use Notifiable;

    protected  $guard = 'admin';

    protected  $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];




}
