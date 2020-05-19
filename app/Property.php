<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //use Notifiable;
    protected $table = 'properties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'propertyName','propertyType','propertyDescription', 'numberOfUnits','address','phonenumber','propertymanager'
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
