<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUsersController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\DashboardController;

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
    return view('Auth.login');
});

Auth::routes();

Route::get('/login', [LoginUserController::class, 'index'])->name('userlogin');
Route::post('/save', [LoginUserController::class, 'customlogin'])->name('customlogin'); 

Route::post('/signout', [LoginUserController::class, 'signout'])->name('signout');

Route::resource('/register', RegisteredUsersController::class);

//Route::get('/dashboard', [LoginUserController::class, 'homepage'])->name('dashboard');

//auth route for both 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/residentprofile', [DashboardController::class, 'residentprofile'])->name('dashboard.residentprofile');
    Route::get('/bhw', [DashboardController::class, 'bhw'])->name('dashboard.bhw');
    Route::get('/events', [DashboardController::class, 'activityevents'])->name('dashboard.events');
    Route::get('/familynumbering', [DashboardController::class, 'familynumbering'])->name('dashboard.familynumbering');
    Route::get('/healthconsultation', [DashboardController::class, 'healthconsultation'])->name('dashboard.healthconsultation');
    Route::get('/medicinerequest', [DashboardController::class, 'medicinerequest'])->name('dashboard.medicinerequest');
    Route::get('/purok', [DashboardController::class, 'purok'])->name('dashboard.purok');
    Route::get('/reports', [DashboardController::class, 'reports'])->name('dashboard.reports');

/* // for users
Route::group(['middleware' => ['auth', 'role:bhw']], function() { 
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

// for blogwriters
Route::group(['middleware' => ['auth', 'role:blogwriter']], function() { 
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@postcreate')->name('dashboard.postcreate');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
