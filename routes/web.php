<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::middleware('guest')->group(function () {

    Route::prefix('/')->controller(LandingPageController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
    });

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'attemptLogin'])->name('attemptLogin');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'storeRegist'])->name('storeRegist');
    Route::get('/register/verify/{verify_key}', [AuthController::class, 'verify'])->name('verify');
});

Route::middleware('auth')->group(function () {
    Route::prefix('/dashboard')->controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

    Route::prefix('/')->controller(BlogController::class)->group(function () {
        Route::get('/blog', 'index')->name('blog');
        Route::get('/blog/create', 'create')->name('blog.create');
    });

    Route::prefix('/profile')->controller(ProfileController::class)->group(function () {
        Route::get('/', 'index')->name('profile');
        Route::post('/store', 'store')->name('profile.store');
    });

    Route::prefix('/setting')->controller(SettingController::class)->group(function () {
        Route::get('/', 'index')->name('setting');
        Route::post('/store', 'store')->name('setting.store');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

















Route::get('/home', function () {
    return view('welcome');
});
