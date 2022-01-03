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
use App\Http\Controllers\DeliveriesConsulController;
// use App\Http\Controllers\EpiConsulController;
// use App\Http\Controllers\NtpConsulController;
// use App\Http\Controllers\FamilyplanningConsulController;
// use App\Http\Controllers\DiarrhealConsulController;
// use App\Http\Controllers\OtherConsulController;
use App\Http\Controllers\SearchAutoCompleteController;
use App\Http\Controllers\MedRequestController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ReportController;


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

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::resource('/register', RegisteredUsersController::class);

Route::group(['middleware' => ['auth']], function () {

    // route from main sidebar links //
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/bhw', [DashboardController::class, 'index'])->name('dashboard.bhw');
    Route::get('/events', [DashboardController::class, 'activityevents'])->name('dashboard.events');
    Route::get('/familynumbering', [DashboardController::class, 'familynumbering'])->name('dashboard.familynumbering');
    Route::get('/medicinerequest', [DashboardController::class, 'medicinerequest'])->name('dashboard.medicinerequest');
    Route::get('/purok', [DashboardController::class, 'purok'])->name('dashboard.purok');
    Route::get('/reports', [DashboardController::class, 'reports'])->name('dashboard.reports');
    Route::get('/myprofile', [DashboardController::class, 'users_profile'])->name('dashboard.myprofile');

    // route for health consultation sidebar links //
    Route::get('/pregnancy', [DashboardController::class, 'pregnancy'])->name('dashboard.pregnancy');
    Route::get('/deliveries', [DashboardController::class, 'deliveries'])->name('dashboard.deliveries');
    Route::get('/epi', [DashboardController::class, 'epi'])->name('dashboard.epi');
    Route::get('/ntp', [DashboardController::class, 'ntp'])->name('dashboard.ntp');
    Route::get('/familyplanning', [DashboardController::class, 'familyplanning'])->name('dashboard.familyplanning');
    Route::get('/diarrheal', [DashboardController::class, 'diarrheal'])->name('dashboard.diarrheal');
    Route::get('/other', [DashboardController::class, 'other'])->name('dashboard.other');

    //route for reports//
    Route::get('/monthly_accomplished', [ReportController::class, 'monthly_accomplished'])->name('reports.monthly_accomplished');
    Route::get('/monthly_visitor', [ReportController::class, 'monthly_visitor'])->name('reports.monthly_visitor');
    Route::get('/daily_timerec', [ReportController::class, 'daily_timerec'])->name('reports.daily_timerec');
    Route::get('/med_request', [ReportController::class, 'med_request'])->name('reports.med_request');
    //route for myprofile page//  
    Route::resource('/myprofile', MyProfileController::class);

    //route for changing current user's password //
    Route::get('/profile', [ChangePasswordController::class, 'profile'])->name('yourprofile');
    Route::post('/changepassword', [ChangePasswordController::class, 'changePassword'])->name('adminchangepassword');

    //route for bhw page//
    Route::resource('/bhw', usersController::class);

    //route for resident page page//
    Route::resource('/residentprofile', ResidentController::class);

    Route::resource('/pregnancy', PregnantConsulController::class);
    Route::resource('/deliveries', DeliveriesConsulController::class);
    //Route::resource('epi', EpiConsulController::class);
    //Route::resource('ntp', NtpConsulController::class);
    //Route::resource('familyplanning', FamilyplanningConsulController::class);
    //Route::resource('diarrheal', DiarrhealConsulController::class);
    //Route::resource('other', OtherConsulController::class);

    Route::get('/events', [FullCalendarController::class, 'index'])->name('events.view');
    Route::post('events/action', [FullCalendarController::class, 'action'])->name('events.action');

    Route::post('/getResidents', [SearchAutoCompleteController::class, 'getResidents'])->name('getResidents');

    Route::resource('/reports/medicinerequest', MedRequestController::class);
    Route::post('/users_profile', 'App\Http\Controllers\MyProfileController@upload');
});
