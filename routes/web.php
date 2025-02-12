<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController; // Add this line
use App\Http\Controllers\AuthController; // Import AuthController

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
//main Page

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // Welcome page route

// login page
// Show the signup form
Route::get('/signup', [AuthController::class, 'showSignUpForm'])->name('signup.form');

// Handle the signup request
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

// Show the login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// Handle the login request
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Show the main page after login
Route::get('/home', [AuthController::class, 'home'])->name('welcome'); // Adjusted name for clarity



// Donate page route
use App\Http\Controllers\DonationController as DonationControllerAlias;
Route::get('/donate', [DonationControllerAlias::class, 'showForm'])->name('donate.form');
Route::post('/donate', [DonationControllerAlias::class, 'storeDonation'])->name('donate.store');

// About Page route
Route::get('/about', function () {
    return view('about');
});

use App\Http\Controllers\FundraiserController;

// Fundraiser page route
Route::get('/fundraiser', [FundraiserController::class, 'create'])->name('fundraiser.create');
Route::post('/fundraiser/submit', [FundraiserController::class, 'store'])->name('fundraiser.submit');



// Personal Page route
use App\Http\Controllers\PersonalController;
Route::get('/personal', [PersonalController::class, 'show'])->name('personal.show');

// Education Page route
use App\Http\Controllers\EducationController;
Route::get('/education', [EducationController::class, 'show'])->name('education.show');

// Medical Page route
use App\Http\Controllers\MedicalController;
Route::get('/medical', [MedicalController::class, 'show'])->name('medical.show');

// Animal Page route
use App\Http\Controllers\AnimalController;
Route::get('/animal', [AnimalController::class, 'show'])->name('animal.show');

// Contact page route
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
