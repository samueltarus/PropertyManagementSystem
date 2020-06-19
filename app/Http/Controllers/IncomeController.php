<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index (){
        return view ('income.index');
    }

    public function landlord_income (){
        return view ('income.landlord_income');
    }
}
