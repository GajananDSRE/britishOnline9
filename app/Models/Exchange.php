<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    //

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

    protected $fillable = [
        'id','name','url','logo','demo_id','password','sport','balance','token'
    ];

}
