<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){

        return view('invoice.index');
    }
   public function  prepare_invoice (){


       return view('invoice.prepare_invoice');

   }
   public function show($id){
       return view ('invoice.invoice_view');
   }

   public function generate_invoice(){


       return view ('invoice.generate_invoice');
   }
   public function print_invoice(){
    return view ('invoice.print_invoice');
}
   


}
