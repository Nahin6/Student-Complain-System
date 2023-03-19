<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

// Route::prefix('Moderator')->middleware('auth');

Route::controller(AppController::class)->group(function (){
    Route::get('/redirect','LoginFunction' );
    Route::get('/logout','logoutFunction' );
});

Route::controller(AdminController::class)->group(function (){
    Route::get('/AddModerators','AddModeratorsFunction' );
    Route::post('/AddModeratorButton','AddModeratorButtonFunction' );
    Route::get('/ViewModeratorsList','ViewModeratorsListFunction' );
    Route::get('/RemoveMod/{id}','RemoveModFunction' );
    Route::get('/ViewComplain','ViewComplainFunction' );
});
Route::controller(StudentController::class)->group(function (){
    Route::get('/NewComplain','NewComplainFunction' );
    Route::post('/MakeNewComPlainButton','MakeNewComPlainButtonFunction' );
    Route::get('/ViewComplainList','ViewComplainListFunction' );
    Route::get('/RemoveComplainButton/{id}','RemoveComplainButtonFunction' );
    Route::get('/SeeProfile','SeeProfileFunction' );

});

Route::controller(ParentsController::class)->group(function(){
Route::get('/ParentsNewComplain','ParentsNewComplainFunction');
Route::post('/ParentsNewComPlainSubmit','ParentsNewComPlainSubmitFunction');
Route::get('/ParentsViewComplains','ParentsViewComplainsFuntion');
Route::get('/RemoveParentsComplain/{id}','RemoveParentsComplainFunction');
Route::get('/ApplyForVisitCampus','ApplyForVisitCampusFuntion');
Route::post('/ApplyForVisitPassSubmit','ApplyForVisitPassSubmitFunction');
Route::get('/CheckForVisitCampus','CheckForVisitCampusFuntion');
Route::get('/RemoveVisitPassButton/{id}','RemoveVisitPassButtonFunction');
});

Route::controller(TeacherController::class)->group(function(){

    Route::get('/TeacherNewComplain','TeacherNewComplainFunction');
    Route::post('/TeacherNewComPlainSubmit','TeacherNewComPlainSubmitSubmitFunction');
    Route::get('/TeacherViewComplains','TeacherViewComplainsFunction');
    Route::get('/RemoveTeacherComplain/{id}','RemoveTeacherComplainFunction');
});


Route::middleware('Moderator:Moderator')->group(function() {


    Route::get('Moderator/login',[ModController::class, 'ModLoginFunction']);
    Route::post('Moderator/login',[ModController::class, 'store'])->name('Moderator.login');

});


Route::middleware([
    'auth:sanctum,Moderator',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/Moderators/ModeratorDashboard', function () {
        return view('Moderators.ModeratorDashboard');
    })->name('dashboards')->middleware('auth:Moderator');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
