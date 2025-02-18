<?php

use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\Backend\BillController;
use App\Http\Controllers\Backend\BillingController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\EnquiryController;
use App\Http\Controllers\Backend\InboxController;
use App\Http\Controllers\Backend\RoutineController;
use App\Http\Controllers\Backend\SchedulerController;
use App\Http\Controllers\Backend\StatisticsController;
use App\Http\Controllers\Backend\WaterLogController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\SuperAdminAuth;
use Illuminate\Support\Facades\Route;

// Main route (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Super Admin Login Routes
Route::get('/super-admin-login', [SuperAdminController::class, 'showLoginForm'])->name('super-admin.login');
Route::post('/super-admin-login', [SuperAdminController::class, 'login'])->name('super-admin.login.submit');


// Apply SuperAdminAuth middleware to the register route
Route::get('/super-admin-register', function () {
    return view('super-admin-register');
})->middleware(SuperAdminAuth::class)->name('super-admin-register');

// Dashboard Route, only for authenticated users
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated routes group
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/statistics', StatisticsController::class)->names('statistics');
    Route::resource('/customer', CustomerController::class)->names('customer');
    Route::resource('/employee', EmployeeController::class)->names('employee');
    Route::resource('/schedule', SchedulerController::class)->names('schedule');
    Route::resource('/routine', RoutineController::class)->names('routine');
    Route::resource('/inbox', InboxController::class)->names('inbox');
    Route::resource('/help', HelpController::class)->names('help');
    Route::resource('/billing', BillController::class)->names('billing');

    // Water level
    Route::get('/update-water-level', [WaterLogController::class, 'updateWaterLog']);

    // Search customer
    Route::get('/test-search', [BillingController::class, 'search'])->name('test-search');
    // For chartjs
    Route::get('/data', [BillingController::class, 'getCustomerData']);

    // Enquiry request
    Route::post('/enquiry/complete/{id}', [EnquiryController::class, 'complete'])->name('enquiry-complete');
    Route::delete('/enquiry/destroy/{id}', [EnquiryController::class, 'destroy'])->name('enquiry-destroy');
});

require __DIR__ . '/auth.php';
