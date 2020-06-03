<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignHouses extends Model
{
    //
    
             //use Notifiable;
     protected $table = 'assign_houses';

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $fillable = [
         'property_name','house_number','predifened_monthly_rent', 'tenant_ID','tenant_name','deposit','rent_paid',
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
