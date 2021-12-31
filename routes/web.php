<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

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

// Route for user
Route::get('/', [UserController::class, 'home'])->name('user.home');

Route::get('/Services', [UserController::class, 'services'])->name('user.services');

Route::get('/Presentation', [UserController::class, 'presentation'])->name('user.presentation');

Route::get('/House', [UserController::class, 'house'])->name('user.house');
//Route::get('/Testimony', [UserController::class, 'testimony'])->name('user.testimony');

Route::get('/Faq', [UserController::class, 'faq'])->name('user.faq');
Route::get('/Job', [UserController::class, 'job'])->name('user.job');
Route::post('/Job/Store', [UserController::class, 'jobstore'])->name('user.jobstore');

// Route for contact 

Route::prefix('/Contact')->group(function () {
    Route::get('/', [ContactController::class, 'contact'])->name('user.contact');
    Route::post('/storeParticular', [ContactController::class, 'storeParticular'])->name('storeParticular.contact');
    Route::post('/storeEntreprise', [ContactController::class, 'storeEntreprise'])->name('storeEntreprise.contact');

});

// Admin route 

Route::prefix('/Admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/Login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/Home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/Create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/Store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/Edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/Update', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/Destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/Logout', [AdminController::class, 'logout'])->name('admin.logout');
    

});

