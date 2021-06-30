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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', \App\Http\Livewire\HomeComponent::class);
Route::get('/shop', \App\Http\Livewire\ShopComponent::class);
Route::get('/cart', \App\Http\Livewire\CartComponent::class);
Route::get('/checkout', \App\Http\Livewire\CheckoutComponent::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// For user or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

});
// For Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

});
