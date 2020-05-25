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



        // Route::group(['prefix'=>'property','as'=>'property','namespace'=>'property'],function(){
        //         Route::view('/property','dashboard');
        //         Route::redirect('/properties','ManagePropertiesController');
        //         Route::view('/units','ManageUnitsController');

        // });


//manage Properties
        Route::resource('/property','PropertyController');
        Route::resource('/manageUnits','ManagePropertiesController');




        // Route::get('index',['as'=>'Units','uses'=>'ManagePropertiesController@index']);
        // Route::get('/property.Units', function() {
        //        return view('Units');
        //      });
        // Route::get('/property/ManageUnits', function () {
        //         return view('property/ManageUnits/index');

        //         });






//manage Tenants
        Route::resource('/tenant','TenantController');
        //Route::get('/tenant','TenantController@index') ->name('dashboard');
        Route::resource('/tenantBilling','BillingtenantController');
        Route::get('/tenant/managetenant','ManageTenantController@index');


//manage Accounts and Finance
        Route::get('/accountsFinance','FinanceandAccountsController@index') ->name('dashboard');
        Route::get('/accountsFinance/reports','AccountsFinanceReportsController@index');
        Route::get('/accountsFinance/accounts','AccountsController@index');
        Route::get('/accountsFinance/updates','UpdatesController@index');








