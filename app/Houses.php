<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    //use Notifiable;
    protected $table = 'houses';

    /**web
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        
        'property_id','property_name','house_number','house_type','monthly_rent','house_status'
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
    // public function properties(){
    //     return $this->hasMany('App\tenant');
    // }
    public function property (){
        return $this->belongsTo('App\Property');
    }

}
