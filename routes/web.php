<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUsersController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\PregnantConsulController;
use App\Http\Controllers\SearchAutoCompleteController;
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
    return view('auth.login');
});
Route::get('/login', [LoginUserController::class, 'index'])->name('userlogin');
Route::post('/save', [LoginUserController::class, 'customlogin'])->name('customlogin'); 
Route::post('/signout', [LoginUserController::class, 'signout'])->name('signout');

Route::resource('/register', RegisteredUsersController::class);

Route::group([ 'middleware' => ['auth']], function () {
    
    // route from dashboard //
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/events', [DashboardController::class, 'activityevents'])->name('dashboard.events');
    Route::get('/familynumbering', [DashboardController::class, 'familynumbering'])->name('dashboard.familynumbering');
    Route::get('/healthconsultation', [DashboardController::class, 'healthconsultation'])->name('dashboard.healthconsultation');
    Route::get('/medicinerequest', [DashboardController::class, 'medicinerequest'])->name('dashboard.medicinerequest');
    Route::get('/purok', [DashboardController::class, 'purok'])->name('dashboard.purok');
    Route::get('/reports', [DashboardController::class, 'reports'])->name('dashboard.reports');
    Route::get('/myprofile', [DashboardController::class, 'users_profile'])->name('dashboard.myprofile');

    Route::resource('/myprofile', MyProfileController::class);

    Route::get('/profile', [ChangePasswordController::class, 'profile'])->name('yourprofile');
    Route::post('/changepassword', [ChangePasswordController::class, 'changePassword'])->name('adminchangepassword');

    Route::resource('/residentprofile', ResidentController::class);
    
    Route::resource('/healthconsultation', PregnantConsulController::class);
    
    Route::resource('/bhw', usersController::class);

    Route::get('/events', [FullCalendarController::class, 'index'])->name('events.view');
    Route::post('events/action', [FullCalendarController::class, 'action'])->name('events.action');
    
    Route::get('search', [SearchAutoCompleteController::class, 'autosearch'])->name('search');

});

