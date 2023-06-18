<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
// DASHBOARD  ↓
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// HOME ↓
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

// Announcement ↓
Route::get('/announcement', function () {
    return Inertia::render('Announcement/Index');
})->name('announcement');

// JOBS SEARCH ↓
Route::get('/jobs', function () {
    return Inertia::render('Job/Index');
})->name('job');


// COMPANIES ↓
Route::get('/company', function () {
    return Inertia::render('Company/Index');
})->name('company');


// ABOUT US ↓
Route::get('/about-us', function () {
    return Inertia::render('AboutUs/Index');
})->name('about-us');



// Route::resource('announcements', ProductController::class) //Product ROUTE
//     ->only(['index','create', 'store', 'update', 'destroy'])
//     ->middleware(['auth', 'verified']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
