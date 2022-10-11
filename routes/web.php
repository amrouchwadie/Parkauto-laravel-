<?php

use App\Client;
use App\Contract;
use App\Status;
use App\User;
use Illuminate\Support\Facades\Auth;
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


//Clients
Route::resource('/clients', 'ClientsController');
Route::delete('/client_doc/{id}', 'ClientsController@delete')->name('clidoc.delete');
Route::get('/client_doc/{id}/edit', 'ClientsController@editclidoc')->name('clidoc.edit');
Route::put('/client_doc/{id}', 'ClientsController@updateclidoc')->name('clidoc.update');

//Route::get('clients/show/{id}','ClientsController@show');

//Statuses
Route::resource('/statuses', 'StatusesController');
//Route::get('statuses/show/{id}','StatusesController@show');

//Cars
Route::resource('/cars', 'CarsController');
Route::delete('/carses/{id}', 'CarsController@delete')->name('opcar.delete');
Route::get('/carses/{id}/edit', 'CarsController@editop')->name('opcar.edit');
Route::put('/carses/{id}', 'CarsController@updateop')->name('opcar.update');
Route::get('/carses/{id}/create', 'CarsController@createop')->name('opcar.create');
Route::post('/carses', 'CarsController@storeop')->name('opcar.store');
//Alerts-> Operation
Route::resource('/alerts', 'AlertsController');

//Contracts
Route::resource('/contracts', 'ContractsController');
Route::get('/search', 'ContractsController@search');
Route::get('/exportPDF/{id}', 'ContractsController@generatePDF');
Route::get('/contracts/restore/{id}', 'ContractsController@restore')->name('contracts.restore');

//Users
Route::resource('/users', 'UsersController');
Route::get('/users/restore/{id}', 'UsersController@restore')->name('users.restore');
//Document
Route::resource('/documents', 'DocumentsController');

// Entretiens
Route::resource('/entretiens', 'EntretiensController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', function () {
    return view('welcome');
});
