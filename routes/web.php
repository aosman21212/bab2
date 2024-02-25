<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clientdatareports/export', 'App\Http\Controllers\clientdatareportController@export')->name('clientdatareports.export');

Route::resource('vendors', App\Http\Controllers\vendorsController::class);

Route::get('/vendordatas/export', 'App\Http\Controllers\VendordataController@export')->name('vendordatas.export');

Route::resource('clients', App\Http\Controllers\clientsController::class);


Route::resource('babacctmanagers', App\Http\Controllers\babacctmanagersController::class);


Route::resource('productservices', App\Http\Controllers\productservicesController::class);


Route::resource('vendordatas', App\Http\Controllers\vendordataController::class);


Route::resource('clientdatas', App\Http\Controllers\clientdataController::class);
// Route::get('/fetch-product-services', 'clientdataController@fetchProductServices');

  

Route::resource('users', UserController::class)->middleware('auth');


Route::resource('roles', App\Http\Controllers\rolesController::class);
Route::get('/users/assignroles/{id}', 'App\Http\Controllers\UserController@assignRoles')->name('users.assignroles');
Route::patch('/users/updateroles/{id}', 'App\Http\Controllers\UserController@updateRoles')->name("roles.rolesupdate");
Route::get('/roles/assignpermissions/{id}', 'App\Http\Controllers\RolesController@assignPermissions')->name('roles.assignpermissions');
Route::patch('/roles/updatepermissions/{id}', 'App\Http\Controllers\RolesController@updatePermissions')->name("roles.permissionsupdate");
Route::resource('permissions', App\Http\Controllers\permissionsController::class);


Route::resource('clientdatareports', App\Http\Controllers\clientdatareportController::class);
