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
use App\Http\Controllers\EpiController;
use App\Http\Controllers\NtpController;
use App\Http\Controllers\FamilyplanningController;
use App\Http\Controllers\DiarrhealController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\SearchAutoCompleteController;
use App\Http\Controllers\MedRequestController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\restoreController;
use App\Http\Controllers\FamilyNumberingController;
use App\Http\Controllers\SearchFamNumController;
use App\Http\Controllers\purokController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchResidentByFamilyNumber;
use App\Http\Controllers\UserRestoreController;
use App\Http\Controllers\usersDeletecontroller;
use App\Http\Controllers\ResidentDeleteController;
use App\Http\Controllers\DailyTimeRecordController;
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

Route::group([ 'middleware' => ['role:admin_nurse|bhw']], function () {
    Route::get('/dailytimerecord/{$dtr}', [DailyTimeRecordController::class, 'index'])->name('dtr.index');
    Route::get('dailytimerecord/timein/{id}', [DailyTimeRecordController::class, 'showtimeIn'])->name('dtr.timeIn');
    Route::post('dailytimerecord/undertime/{id}', [DailyTimeRecordController::class, 'showunderTime'])->name('dtr.underTime');
    Route::post('dailytimerecord/timeout/{id}', [DailyTimeRecordController::class, 'showtimeOut'])->name('dtr.timeOut');

// route from main sidebar links //
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/bhw', [DashboardController::class, 'index'])->name('dashboard.bhw');
    Route::get('/events', [DashboardController::class, 'activityevents'])->name('dashboard.events');
    Route::get('/familynumbering', [DashboardController::class, 'familynumbering'])->name('dashboard.familynumbering');
    Route::get('/purok', [DashboardController::class, 'purok'])->name('dashboard.purok');
    Route::get('/reports', [DashboardController::class, 'reports'])->name('dashboard.reports');
    Route::get('/myprofile', [DashboardController::class, 'users_profile'])->name('dashboard.myprofile');

// route for health consultation sidebar links //
Route::group([ 'middleware' => ['role:admin_nurse']], function () {
    Route::get('/pregnancy', [DashboardController::class, 'pregnancy'])->name('dashboard.pregnancy');
    Route::get('/deliveries', [DashboardController::class, 'deliveries'])->name('dashboard.deliveries');
    Route::get('/epi', [DashboardController::class, 'epi'])->name('dashboard.epi');
    Route::get('/ntp', [DashboardController::class, 'ntp'])->name('dashboard.ntp');
    Route::get('/familyplanning', [DashboardController::class, 'familyplanning'])->name('dashboard.familyplanning');
    Route::get('/diarrheal', [DashboardController::class, 'diarrheal'])->name('dashboard.diarrheal');
    Route::get('/other', [DashboardController::class, 'other'])->name('dashboard.other');

    //routes for medicine request
    Route::get('/medicinerequest', [DashboardController::class, 'medicinerequest'])->name('dashboard.medicinerequest');
    Route::resource('/medicinerequest', MedRequestController::class);

    //routes for health consultation//
    Route::resource('/pregnancy', PregnantConsulController::class);
    Route::resource('/deliveries', DeliveriesConsulController::class);
    Route::resource('/epi', EpiController::class);
    Route::resource('/ntp', NtpController::class);
    Route::resource('/familyplanning', FamilyplanningController::class);
    Route::resource('/diarrheal', DiarrhealController::class);
    Route::resource('/other', OtherController::class); 
});

//route for myprofile page//  
    Route::resource('/myprofile', MyProfileController::class);

//route for changing current user's password //
    Route::get('/profile', [ChangePasswordController::class, 'profile'])->name('yourprofile');
    Route::post('/change/password',  [ChangePasswordController::class,'changePassword'])->name('profile.change.password');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('PictureUpdate');

//route for bhw page//
    Route::get('/bhws/restore/{id}', UserRestoreController::class, 'restore')->name('bhws.restore');
    Route::get('/bhws/permanentdelete/{id}', usersDeletecontroller::class, 'delete')->name('bhws.permanentdelete');
    Route::resource('/bhw', usersController::class);

//route for resident page page//  
    Route::get('/residentprofile/restore/{id}', restoreController::class, 'restore')->name('resident.restore');
    Route::get('/residentprofile/permanentdelete/{id}', ResidentDeleteController::class, 'delete')->name('resident.permanentdelete');
    Route::resource('/residentprofile', ResidentController::class);

//routes for events//
    Route::get('/events', [FullCalendarController::class, 'index'])->name('events.view');
    Route::post('events/action', [FullCalendarController::class, 'action'])->name('events.action');

//routes for search residents for HealthConsultation//
    Route::post('/getResidents', [SearchAutoCompleteController::class, 'getResidents'])->name('getResidents');

//routes for search Family Number for ResidentProfile page//
    Route::post('/getFamilynumber', [SearchFamNumController::class, 'getFamilynumber'])->name('getFamilynumber');

//routes for familynumbering page//
    Route::resource('/familynumbering', FamilyNumberingController::class);

//routes for search residents for familynumbering//
Route::post('/getResidentsFamilyNum', [SearchResidentByFamilyNumber::class, 'getResidentsFamilyNum'])->name('getResidentsFamilyNum');

//routes for Purok Page//
    Route::get('/purok', [purokController::class, 'index'])->name('purok');
    Route::get('/purok/resident/{id}', [purokController::class, 'view'])->name('purok.show');


});
