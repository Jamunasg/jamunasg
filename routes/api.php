<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//state//
Route::post('statecreate', 'StateController@create');
Route::get('statelist', 'StateController@list');
Route::put('stateupdate', 'StateController@update');
Route::delete('statedelete/{id}', 'StateController@delete');

Route::post('districtmastercreate', 'DistrictMasterController@create');
Route::get('districtmasterlist', 'DistrictMasterController@list');
Route::get('getonlystate/{id}', 'DistrictMasterController@getstate');
Route::get('liststate_id/{id}', 'DistrictMasterController@getstate_id');
Route::put('districtmasterupdate', 'DistrictMasterController@update');
Route::delete('districtmasterdelete/{id}', 'DistrictMasterController@delete');

Route::post('citycreate', 'CityController@create');
Route::get('citylist', 'CityController@list');
Route::get('stateinfo/{id}', 'CityController@getstate');
Route::put('cityupdate', 'CityController@update');
Route::delete('citydelete/{id}', 'CityController@delete');

Route::post('currencymastercreate', 'CurrencyMasterController@create');
Route::get('currencymasterlist', 'CurrencyMasterController@list');
Route::put('currencymasterupdate', 'CurrencyMasterController@update');
Route::delete('currencymasterdelete/{id}', 'CurrencyMasterController@delete');

Route::post('factorymastercreate', 'FactoryMasterController@create');
Route::get('factorymasterlist', 'FactoryMasterController@list');
Route::put('factorymasterupdate', 'FactoryMasterController@update');
Route::delete('factorymasterdelete/{id}', 'FactoryMasterController@delete');

Route::post('productmastercreate', 'ProductMasterController@create');
Route::get('productmasterlist', 'ProductMasterController@list');
Route::put('productmasterupdate', 'ProductMasterController@update');
Route::delete('productmasterdelete/{id}', 'ProductMasterController@delete');

Route::post('km_costcreate', 'Km_CostController@create');
Route::get('km_costlist', 'Km_CostController@list');
Route::put('km_costupdate', 'Km_CostController@update');
Route::delete('km_costdelete/{id}', 'Km_CostController@delete');

Route::post('gstcreate', 'GstController@create');
Route::get('gstlist', 'GstController@list');
Route::put('gstupdate', 'GstController@update');
Route::delete('gstdelete/{id}', 'GstController@delete');

Route::post('employeecreate', 'EmployeeController@create');
Route::get('employeelist', 'EmployeeController@list');
Route::put('employeeupdate', 'EmployeeController@update');
Route::delete('employeedelete/{id}', 'EmployeeController@delete');


Route::post('factoryemployeecreate', 'FactoryEmployeeController@create');
Route::get('factoryemployeelist', 'FactoryEmployeeController@list');
Route::put('factoryemployeeupdate', 'FactoryEmployeeController@update');
Route::delete('factoryemployeedelete/{id}', 'FactoryEmployeeController@delete');

Route::post('factoryemployeeincentivecreate', 'FactoryEmployeeIncentiveController@create');
Route::get('factoryemployeeincentivelist', 'FactoryEmployeeIncentiveController@list');
Route::put('factoryemployeeincentiveupdate', 'FactoryEmployeeIncentiveController@update');
Route::delete('factoryemployeeincentivedelete/{id}', 'FactoryEmployeeIncentiveController@delete');

Route::post('customerdetailscreate', 'CustomerDetailsController@create');
Route::get('customerdetailslist', 'CustomerDetailsController@list');
Route::put('customerdetailsupdate', 'CustomerDetailsController@update');
Route::delete('customerdetailsdelete/{id}', 'CustomerDetailsController@delete');

Route::post('customerdeliverydetailscreate', 'CustomerDeliveryDetailsController@create');
Route::get('customerdeliverydetailslist', 'CustomerDeliveryDetailsController@list');
Route::put('customerdeliverydetailsupdate', 'CustomerDeliveryDetailsController@update');
Route::delete('customerdeliverydetailsdelete/{id}', 'CustomerDeliveryDetailsController@delete');