<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello',function(){
    return "Hello World";
});

Route::get('hello/controller',[DemoController::class,'sayHello']);

Route::get('/dashboard',[DashboardController::class,'dashboard']);

Route::get('/dashboard/home',[DashboardController::class,'home']);

Route::get('/dashboard/sidebar/sidebar',[DashboardController::class,'sidebar']);

Route::get('/dashboard/profile',[DashboardController::class,'profile']);