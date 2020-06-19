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
        'property_id','landlord_id','property_name','apartments_type','county','town','location','property_description', 'username','management_fee',
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

    public function houses()
    {
        return $this->hasMany('App\tenant');
    }

    public function landlords(){
        return $this->belongTo('App\Landord');
    }
}
