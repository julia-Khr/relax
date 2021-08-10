<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EnterpriseController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ThingController;
use App\Http\Controllers\Admin\ResponseController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\VisitorController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');
    Route::resource('enterprises', EnterpriseController::class);
    // Route::resource('events', EventController::class);
    // Route::resource('things', ThingController::class);
    // Route::resource('responses', ResponseController::class);
    // Route::resource('photos', PhotoController::class);
    // Route::resource('subscriptions', SubscriptionController::class);
    // Route::resource('visitors', VisitorController::class);
});
