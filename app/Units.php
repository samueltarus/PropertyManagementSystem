<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    //use Notifiable;
    protected $table = 'units';

    /**web
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'propertyName','unitNumber','bedrooms','bathrooms','propertyManager'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
