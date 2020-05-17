<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageLandlord extends Model
{
    
    //use Notifiable;
    protected $table = 'manage_landlords';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','username', 'phonenumber','email','no_apartments','no_units','rent', 'services_amount',
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
