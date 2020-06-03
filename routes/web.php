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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
//  Auth::routes(['register'=>false]);

 Route::get('/home', 'HomeController@index')->name('home');


// Route::prefix('admin')->group(function (){

//  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::resource('/dashboard','DashboardController');


// });


//   Route::middleware(['auth'])->group(function(){
      
  //Dashboard Controller
 Route::resource('/dashboard','DashboardController');

  //admin 
  Route::resource('/admin','AdminController');



  //manage landlords
          Route::resource('/landlord','LandlordController') ;
        //   Route::resource('/landlord/managelandlords','ManageLandlordController');
      
  
       
  
  //manage Properties
          Route::resource('/property','PropertyController');
         Route::resource('/property/addhouses','ManagePropertiesController');
  
  //manage houses
          Route::resource('/houses','HousesController');
          Route::resource('/houses/vacant','VacantController');
          Route::resource('/houses/occupied','OccupiedController');
  
  
  
  //manage Tenants
  
          Route::resource('/tenant','TenantController');
          Route::resource('tenant/assignhouses','ManageTenantController');
          Route::get('/property_name/{id}','ManageTenantController@property_name')->name('property_name');
  
  
          //Route::resource('/tenant/assignhouses','ManageTenantController');
  
  
  //manage Accounts and Finance
        //   Route::get('/accountsFinance','FinanceandAccountsController@index') ->name('dashboard');




        
//  });







