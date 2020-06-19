<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Houses;

class DatabaseQueryController extends Controller
{
    public function findhouse_number(Request $request){

        
        $data =Houses::select('house_number','id')->where('property_id',$request->property_id)->get();
        
        return response()->json($data);
    }

    // findmonthly_rent
    public function findmonthly_rent(Request $request){


        $rent = Houses::select('monthly_rent')->where('id',$request->property_id)->first();
        
        return response()->json($rent);
    }
}
