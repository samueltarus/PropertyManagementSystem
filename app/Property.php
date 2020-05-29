<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //use Notifiable;
    protected $table = 'properties';

    /**web
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'propertyName','apartmentsType','townLocation','location','propertyDescription', 'username','managementFee',
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
