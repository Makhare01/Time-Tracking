<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// for Admin
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('dashboard.users');
    Route::delete('/dashboard/users/{id}', [DashboardController::class, 'destroyUser'])->name('dashboard.destroyUser');
});

// for Company
Route::group(['middleware' => ['auth', 'role:company']], function() {
    Route::get('/dashboard/employees', [CompanyController::class, 'employees'])->name('dashboard.employees');
    Route::post('/dashboard/employees/{id}', [CompanyController::class, 'addProject'])->name('dashboard.addProject');
    Route::delete('/dashboard/employees/{id}', [CompanyController::class, 'deleteUser'])->name('dashboard.deleteUser');
    Route::patch('/dashboard/employees/{id}/{project_id}', [CompanyController::class, 'deleteUserFormProject'])->name('dashboard.deleteUserFormProject');
    Route::put('/dashboard/employees/{id}', [CompanyController::class, 'editUser'])->name('dashboard.editUser');

    Route::get('/dashboard/calendar', [CompanyController::class, 'calendar'])->name('dashboard.calendar');
    Route::get('/dashboard/statistics', [CompanyController::class, 'statistics'])->name('dashboard.statistics');
});

// for User
Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/dashboard/work', [UserController::class, 'work'])->name('dashboard.work');
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});


require __DIR__.'/auth.php';
