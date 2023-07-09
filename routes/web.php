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
Route::get('/jobseeker', function () {
    return Inertia::render('Dashboard/Jobseeker');
})->middleware(['auth', 'verified'])->name('jobseeker');




function getInertiaData()
{
    return [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => app()->version(),
        'phpVersion' => phpversion(),
    ];
}

Route::group([], function () {
    // HOME ↓
    Route::get('/', function () {
        return Inertia::render('Welcome', getInertiaData());
    })->name('home');

    // Announcement ↓
    Route::get('/announcement', function () {
        return Inertia::render('Announcement/Index', getInertiaData());
    })->name('announcement');

    // JOBS SEARCH ↓
    Route::get('/jobs', function () {
        return Inertia::render('Job/Index', getInertiaData());
    })->name('job');

    // COMPANIES ↓
    Route::get('/company', function () {
        return Inertia::render('Company/Index', getInertiaData());
    })->name('company');

    // ABOUT US ↓
    Route::get('/about-us', function () {
        return Inertia::render('AboutUs/Index', getInertiaData());
    })->name('about-us');

    // ADMIN ↓
    Route::get('/admin', function () {
        return Inertia::render('Admin/Index', getInertiaData());
    })->name('admin');

  

});




// Route::resource('announcements', ProductController::class) //Product ROUTE
//     ->only(['index','create', 'store', 'update', 'destroy'])
//     ->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
