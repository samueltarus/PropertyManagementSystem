<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// /  Auth::routes(['register'=>false]);

 Route::get('/home', 'HomeController@index')->name('home');

         Route::resource('/dashboard','DashboardController')->name('*','dashboard');

         //admin 
        


        //manage landlords
            //Route::resource('/landlord','LandlordController')->name('*','landlord');
            Route::get('/all-landlord','LandlordController@all_landlord');
            Route::get('/add-landlord','LandlordController@add_landlord');
            Route::post('/save-landlord','LandlordController@save_landlord');
            Route::get('/show-landlord/{id}','LandlordController@show_landlord');
            Route::get('/edit-landlord/{id}', 'LandlordController@edit_landlord'); 
            Route::post('/update-landlord/{id}','LandlordController@update_landlord'); 
            Route::get('/delete-landlord/{id}','LandlordController@delete_landlord');
          
           Route::get('/delete_landlord/{id}','LandlordController@destroy');
           Route::get('/edit-profile/{id}', 'LandlordController@edit_profile');    
           Route::post('/update-profile/{id}','LandlordController@update_profile'); 
          
        

         //manage Properties
          Route::resource('/property','PropertyController');
         Route::resource('/property/addhouses','ManagePropertiesController');
         Route::get('/apartments_type','PropertyController@apartment_type');
         Route::post('/create-apartments_type/{id}','PropertyController@create_apartments_type');
  
         //manage houses
          Route::resource('/houses','HousesController');
          Route::get('/all-houses','HousesController@index');
         Route::get('/houses/vacant/index','VacantController@index');  
          Route::get('/houses/occupied/index','OccupiedController@index');
          Route::get('/unactive_house/{id}', 'HousesController@unactive_house');
          Route::get('/active_house/{id}', 'HousesController@active_house'); 
    
            
           
         
         
    
         //manage Tenants
  
          Route::resource('/tenant','TenantController');
          Route::resource('/tenant/assignhouses','ManageTenantController');
          Route::get('/findhouse_number','DatabaseQueryController@findhouse_number')->name('findhouse_number');
          Route::get('/findmonthly_rent','DatabaseQueryController@findmonthly_rent')->name('findmonthly_rent');
          


          Route::resource('invoice','InvoiceController');
          Route::get('/generate-invoice' ,'InvoiceController@generate_invoice');
          Route::get('/print-invoice' ,'InvoiceController@print_invoice');
          Route::get('/prepare-invoice' ,'InvoiceController@prepare_invoice');
          


          //Income route
          Route::get('/company-income','IncomeController@index');
          Route::get('/landlord-income','IncomeController@landlord_income');



   

        
//  });







