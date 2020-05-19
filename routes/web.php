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

Route::get('/home', 'HomeController@index')->name('home');


 
//manage landlords
        Route::get('/landlord','LandlordController@index') ->name('dashboard');
        Route::resource('/landlord/managelandlords','ManageLandlordController');
        Route::resource('/landlord/payments','LandlordpaymentsController');
        Route::resource('/landlord/actions','ActionsController');

        //manage/susped
       //Route::resource('/landlord/managelandlords','SuspendController');


        // Route::resource('landlord'/'managelandlords', 'ManageLandlordController', ['names' => [
        //         'cr' => 'photo.build'
        //     ]]);
        //Route::get('/landlord/managelandlords', 'ManagelandlorController@create');
        // Route::post('landlord/managelandlords', 'ManagelandlorController@store');



//manage Properties
        Route::resource('/property','PropertyController');
        




//manage Tenants
        Route::get('/tenant','TenantController@index') ->name('dashboard');
        Route::get('/tenant/billing','BillingTenantController@index');
        Route::get('/tenant/managetenant','ManageTenantController@index');


//manage Accounts and Finance
        Route::get('/accountsFinance','FinanceandAccountsController@index') ->name('dashboard');
        Route::get('/accountsFinance/reports','AccountsFinanceReportsController@index');
        Route::get('/accountsFinance/accounts','AccountsController@index');
        Route::get('/accountsFinance/updates','UpdatesController@index');



 




