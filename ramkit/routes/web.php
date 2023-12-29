<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['alreadyLoggedIn'])->group(function () {
    // Sign-up
    Route::get('/sign-up', [UserController::class, 'signUp']);
    // Log-in
    Route::get('/login', [UserController::class, 'showLoginForm']);
});

Route::middleware(['authCheck'])->group(function () {
    // Account Dashboard viewing after login
    Route::get('/student-dashboard', [HomeController::class, 'dashboard']);

     // Account Dashboard viewing after login
     Route::get('/course-dashboard', [HomeController::class, 'courseDashboard']);
});


//Registration
Route::post('/register', [UserController::class, 'register']);
//Login
Route::post('/login', [UserController::class, 'login']);
//Log out
Route::post('/logout', [UserController::class, 'logout']);
// Home
Route::get('/', [HomeController::class, 'home']);
//About ramfit
Route::get('/about-ramfit',[HomeController::class,'aboutRamfit']);
//Team ramfit
Route::get('/team-ramfit',[HomeController::class,'teamRamfit']);
//Contact Us
Route::get('/contact-us',[HomeController::class,'contactUs']);
//Course
Route::get('/all-courses',[HomeController::class,'course']);
//Schedule
Route::get('/all-schedule',[HomeController::class,'schedule']);




//Admin login
Route::get('/admins', [AdminController::class, 'index']);
Route::post('/admin.dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/admin-dashboard', [SuperAdminController::class, 'dashboard']);
Route::get('/admin-logout', [SuperAdminController::class, 'logout']);

//Course
Route::resource('/courses/',CourseController::class);
Route::get('/create-course',[CourseController::class,'create']);
Route::get('/edit-course/{course}',[CourseController::class,'edit_course']);
Route::post('/update-course/{course}',[CourseController::class,'update']);
Route::delete('/course-delete/{course}',[CourseController::class,'delete']);

//Lession
Route::resource('/lessions/',LessionController::class);
Route::get('/create-lession',[LessionController::class,'create']);
Route::get('/edit-lession/{lession}',[LessionController::class,'edit_lession']);
Route::post('/update-lession/{lession}',[LessionController::class,'update']);
Route::delete('/lession-delete/{lession}',[LessionController::class,'delete']);
//pdf1 viewing
Route::get('/pdf1/{id}', [LessionController::class, 'showPdf1'])->name('show.pdf1');
//pdf2 viewing
Route::get('/pdf2/{id}', [LessionController::class, 'showPdf2'])->name('show.pdf2');


//Profile
Route::resource('/profiles/',ProfileController::class);
// Route::get('/create-course',[CourseController::class,'create']);
// Route::get('/edit-course/{course}',[CourseController::class,'edit_course']);
// Route::post('/update-course/{course}',[CourseController::class,'update']);
// Route::delete('/course-delete/{course}',[CourseController::class,'delete']);
