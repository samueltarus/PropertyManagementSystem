<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tenant extends Model
{
        //use Notifiable;
        protected $table = 'tenants';

        /**web
         * The attributes that are mass assignable.
         *
         * @var array
         */
    
        protected $fillable = [
           
            'firstname','lastname','propertyName', 'unitNumber','phoneNumber','status','rent','services'
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
