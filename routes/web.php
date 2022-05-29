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


use App\Http\Controllers\AddressController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addresses', [AddressController::class, 'selectAllAddresses']);
Route::get('/customers', [CustomerController::class, 'selectAllCustomers']);
Route::get('/customers/{id}', [CustomerController::class, 'selectOneCustomer']);
