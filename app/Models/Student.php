<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Student extends Authenticatable
{

    use Notifiable;

    protected  $guard = 'supervisor';

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


    protected  $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

}
