<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use \Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','userid','email','contact','password','token','whatsapp_no','role_id','country','current_password','confirmPassword',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
