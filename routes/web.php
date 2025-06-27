<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.pages.index');
});

Route::get('/home', [ContentController::class, 'homeIndex'])->name('homepage');
Route::get('about-us', [ContentController::class, 'about'])->name('aboutpage');
Route::get('fee-structure', [ContentController::class, 'feeStructure'])->name('feeStructure');
Route::get('academic-calender', [ContentController::class, 'calender'])->name('calender');
Route::get('academic-calendar/pdf', [ContentController::class, 'exportPdf'])->name('calendar_pdf');

// All Signin/Signup Routes
Route::get('register-form', [StudentController::class, 'registerForm'])->name('registerForm');
Route::post('register', [StudentController::class, 'register'])->name('register');

Route::get('login-form', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Student Profile (protected)
Route::get('/student/profile', [StudentController::class, 'profile'])->middleware('student.auth')->name('student.profile');

Route::get('apply-online', [StudentController::class, 'applyForm'])->name('applyForm');
Route::post('apply', [StudentController::class, 'apply'])->name('apply');
Route::get('thank-you', [StudentController::class, 'thank_you'])->name('thanks_page');
Route::get('admission-details', [StudentController::class, 'admission_details'])->name('admission_details');

Route::get('/fees/download/pdf', [FeeController::class, 'downloadPDF'])->name('feePDF');