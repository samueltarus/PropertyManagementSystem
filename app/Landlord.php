<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
     //use Notifiable;
     protected $table = 'landlords';

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $fillable = [
         'firstname','lastname','username', 'passport','email','phoneNumber',
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
