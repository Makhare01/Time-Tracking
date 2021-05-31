<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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
    return view('welcome');
});

// for Admin
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/dashboard/users', 'App\Http\Controllers\DashboardController@users')->name('dashboard.users');
    Route::delete('/dashboard/users/{id}', 'App\Http\Controllers\DashboardController@destroyUser')->name('dashboard.destroyUser');
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

// // for roller
// Route::group(['middleware' => ['auth', 'role:roller']], function() { 
//     Route::get('/dashboard/offers', 'App\Http\Controllers\RollerController@offers')->name('dashboard.offers');
//     Route::get('/dashboard/accounts', 'App\Http\Controllers\RollerController@accounts')->name('dashboard.accounts');
//     Route::post('/dashboard/offers', 'App\Http\Controllers\RollerController@accountOffer')->name('dashboard.offers');
//     Route::patch('/dashboard/offers/{id}', 'App\Http\Controllers\RollerController@status')->name('dashboard.status');
//     Route::put('/dashboard/offers/{id}', 'App\Http\Controllers\RollerController@suspend')->name('dashboard.suspend');
// });


// // for superadmin
// Route::group(['middleware' => ['auth', 'role:superadmin']], function() { 
//     Route::post('/dashboard/offersList', 'App\Http\Controllers\SuperadminController@addOffer')->name('dashboard.addOffer');
//     Route::get('/dashboard/offersList', 'App\Http\Controllers\SuperadminController@offersList')->name('dashboard.offersList');
//     Route::delete('/dashboard/offersList/{id}', 'App\Http\Controllers\SuperadminController@offerDestroy')->name('dashboard.offerDestroy');
//     Route::patch('/dashboard/offersList/{id}', 'App\Http\Controllers\SuperadminController@offerEdit')->name('dashboard.offerEdit');
//     Route::put('/dashboard/offersList/{id1}', 'App\Http\Controllers\SuperadminController@offerStatus')->name('dashboard.offerStatus');
// });

// // for registrar
// Route::group(['middleware' => ['auth', 'role:registrar']], function() { 
//     Route::get('/dashboard/accountsList', 'App\Http\Controllers\RegistrarController@accountsList')->name('dashboard.accountsList');
//     Route::post('/dashboard/accountsList', 'App\Http\Controllers\RegistrarController@addAccount')->name('dashboard.accountsListPost'); 
//     Route::delete('/dashboard/accountsList/{id}', 'App\Http\Controllers\RegistrarController@accountDestroy')->name('dashboard.accountDestroy');
//     Route::put('/dashboard/accountsList/{id1}', 'App\Http\Controllers\RegistrarController@accountStatus')->name('dashboard.accountStatus');
//     Route::patch('/dashboard/accountsList/{id}', 'App\Http\Controllers\RegistrarController@accountEdit')->name('dashboard.accountEdit');
// });

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});


require __DIR__.'/auth.php';
