<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisteredUsersController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\UserRestoreController;
use App\Http\Controllers\usersDeletecontroller;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\SearchFamNumController;
use App\Http\Controllers\restoreController;
use App\Http\Controllers\ResidentDeleteController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\SearchAutoCompleteController;
use App\Http\Controllers\PregnantConsulController;
use App\Http\Controllers\PregnantConsul_DeleteController;
use App\Http\Controllers\PregnantConsul_RestoreController;
use App\Http\Controllers\DeliveriesConsulController;
use App\Http\Controllers\DeliveriesConsul_DeleteController;
use App\Http\Controllers\DeliveriesConsul_RestoreController;
use App\Http\Controllers\EpiController;
use App\Http\Controllers\Epi_DeleteController;
use App\Http\Controllers\Epi_RestoreController;
use App\Http\Controllers\NtpController;
use App\Http\Controllers\Ntp_DeleteController;
use App\Http\Controllers\Ntp_RestoreController;
use App\Http\Controllers\FamilyplanningController;
use App\Http\Controllers\Familyplanning_DeleteController;
use App\Http\Controllers\Familyplanning_RestoreController;
use App\Http\Controllers\DiarrhealController;
use App\Http\Controllers\Diarrheal_DeleteController;
use App\Http\Controllers\Diarrheal_RestoreController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\Other_DeleteController;
use App\Http\Controllers\Other_RestoreController;
use App\Http\Controllers\MedRequestController;
use App\Http\Controllers\DailyTimeRecordController;
use App\Http\Controllers\purokController;
use App\Http\Controllers\FamilyNumberingController;
use App\Http\Controllers\SearchResidentByFamilyNumber;
use App\Http\Controllers\FamilyNumbering_DeleteController;
use App\Http\Controllers\FamilyNumbering_RestoreController;

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
    Route::get('/dailytimerecord/{id}', [DailyTimeRecordController::class, 'index'])->name('dtr.index');
    Route::post('dailytimerecord/timein/{id}', [DailyTimeRecordController::class, 'showtimeIn'])->name('dtr.timeIn');
    Route::get('dailytimerecord/undertime/{id}', [DailyTimeRecordController::class, 'showunderTime'])->name('dtr.underTime');
    Route::get('dailytimerecord/timeout/{id}', [DailyTimeRecordController::class, 'showtimeOut'])->name('dtr.timeOut');
    Route::post('dailytimerecord/timeout', [DailyTimeRecordController::class, 'updateTimeOut'])->name('dtr.updatetimeOut');
// route from main sidebar links //
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/bhw', [DashboardController::class, 'index'])->name('dashboard.bhw');
    Route::get('/events', [DashboardController::class, 'activityevents'])->name('dashboard.events');
    Route::get('/familynumbering', [DashboardController::class, 'familynumbering'])->name('dashboard.familynumbering');
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

//routes for health consultation//
    // Routes for Pregnancy Consultation Page
    Route::resource('/pregnancy', PregnantConsulController::class);
    Route::get('/pregnancy/restore/{id}',[ PregnantConsul_RestoreController::class, 'restore'])->name('pregnancy.restore');
    Route::get('/pregnancy/permanentdelete/{id}', [PregnantConsul_DeleteController::class, 'delete'])->name('pregnancy.permanentdelete');

    // Routes for Deliveries Consultation Page
    Route::resource('/deliveries', DeliveriesConsulController::class);
    Route::get('/deliveries/restore/{id}', [DeliveriesConsul_RestoreController::class, 'restore'])->name('deliveries.restore');
    Route::get('/deliveries/permanentdelete/{id}', [DeliveriesConsul_DeleteController::class, 'delete'])->name('deliveries.permanentdelete');

    // Routes for EPI Consultation Page
    Route::resource('/epi', EpiController::class);
    Route::get('/epi/restore/{id}', [[Epi_RestoreController::class, 'restore']])->name('epi.restore');
    Route::get('/epi/permanentdelete/{id}', [[Epi_DeleteController::class, 'delete']])->name('epi.permanentdelete');

    // Routes for NTP Consultation Page
    Route::resource('/ntp', NtpController::class);
    Route::get('/ntp/restore/{id}', [Ntp_RestoreController::class, 'restore'])->name('ntp.restore');
    Route::get('/ntp/permanentdelete/{id}', [Ntp_DeleteController::class, 'delete'])->name('ntp.permanentdelete');

    // Routes for Family Planning Consultation Page
    Route::resource('/familyplanning', FamilyplanningController::class);
    Route::get('/familyplanning/restore/{id}', Familyplanning_RestoreController::class, 'restore')->name('familyplanning.restore');
    Route::get('/familyplanning/permanentdelete/{id}', [Familyplanning_DeleteController::class, 'delete'])->name('familyplanning.permanentdelete');

    // Routes for Diarrheal Problems Consultation Page
    Route::resource('/diarrheal', DiarrhealController::class);
    Route::get('/diarrheal/restore/{id}', [Diarrheal_RestoreController::class, 'restore'])->name('diarrheal.restore');
    Route::get('/diarrheal/permanentdelete/{id}', [Diarrheal_DeleteController::class, 'delete'])->name('diarrheal.permanentdelete');

    // Routes for Other Consultation Page
    Route::resource('/other', OtherController::class); 
    Route::get('/other/restore/{id}', [Other_RestoreController::class, 'restore'])->name('other.restore');
    Route::get('/other/permanentdelete/{id}', [Other_DeleteController::class, 'delete'])->name('other.permanentdelete');


    Route::group([ 'middleware' => ['role:admin_nurse']], function () {
    //routes for medicine request
    Route::get('/medicinerequest', [DashboardController::class, 'medicinerequest'])->name('dashboard.medicinerequest');
    Route::resource('/medicinerequest', MedRequestController::class);
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
//routes for search Family Number for ResidentProfile page//
    Route::post('/getFamilynumber', [SearchFamNumController::class, 'getFamilynumber'])->name('getFamilynumber');

//routes for events//
    Route::get('/events', [FullCalendarController::class, 'index'])->name('events.view');
    Route::post('events/action', [FullCalendarController::class, 'action'])->name('events.action');

//routes for search residents for HealthConsultation//
    Route::post('/getResidents', [SearchAutoCompleteController::class, 'getResidents'])->name('getResidents');

//routes for familynumbering page//
    Route::resource('/familynumbering', FamilyNumberingController::class);
//routes for search residents for familynumbering//
    Route::post('/getResidentsFamilyNum', [SearchResidentByFamilyNumber::class, 'getResidentsFamilyNum'])->name('getResidentsFamilyNum');
    Route::get('/familynumbering/restore/{id}', FamilyNumbering_RestoreController::class, 'restore')->name('familyhead.restore');
    Route::get('/familynumbering/permanentdelete/{id}', FamilyNumbering_DeleteController::class, 'delete')->name('familyhead.permanentdelete');

//routes for Purok Page//
    Route::get('/purok', [purokController::class, 'index'])->name('purok');
    Route::get('/purok/resident/{id}', [purokController::class, 'view'])->name('purok.show');


});
