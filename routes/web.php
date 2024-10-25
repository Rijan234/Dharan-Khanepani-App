<?php

use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\StatisticsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
 Route::get('/login',function(){
    return view('login');
 });

 Route::get('/learnmore',function(){
    return view('learnmore');
 });
Route::get('/app',function(){
    return view('layout/app');
});
#creating route to redirect user to view 'register.blade.php' to register a new accont

Route::get('/register',function(){
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::resource('/statistics' , StatisticsController::class)->names('statistics');
    Route::resource('/employee' , EmployeeController::class)->names('employee');
    Route::resource('/customer' , CustomerController::class)->names('customer');


});

require __DIR__.'/auth.php';
