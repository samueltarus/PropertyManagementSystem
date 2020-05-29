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
    return view('auth.login');
});

Auth::routes();
Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');



//manage landlords
        Route::resource('/landlord','LandlordController') ;
        Route::resource('/landlord/managelandlords','ManageLandlordController');
    

     

//manage Properties
        Route::resource('/property','PropertyController');
        Route::resource('/property/addhouses','ManagePropertiesController');




//manage Tenants
        Route::resource('/tenant','TenantController');
        Route::resource('/tenant/assignhouses','ManagetenantController');


//manage Accounts and Finance
        Route::get('/accountsFinance','FinanceandAccountsController@index') ->name('dashboard');
  








