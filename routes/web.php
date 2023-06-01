<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StudiumController;
use App\Http\Controllers\ReservationControlle;
use App\Http\Controllers\UserController;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('/photo',[SiteController::class,'photo'])->name('photo');
Route::get('/reservations',[SiteController::class,'reservations'])->name('reservations');
Route::get('/advantages',[SiteController::class,'advantages'])->name('advantages');
Route::get('connectus', [SiteController::class, 'connectus'])->name('connectus');
Route::post('connectus', [SiteController::class, 'storeconnectus'])->name('connectus.store');

Route::get('dashboard', [SiteController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth','user'])->group(function(){

Route::get('official', [SiteController::class, 'official'])->name('official');
Route::post('serve',[SiteController::class,'storestore' ])->name('serve.store');
Route::post('serve/{id}',[SiteController::class,'storeupdate' ])->name('serve.update');
Route::delete('serve/{id}',[SiteController::class,'storedelete' ])->name('serve.delete');
});

Route::get('serve/{id}',[SiteController::class,'serve' ])->name('serve');


Route::get('change/{id}',[SiteController::class,'change' ])->name('change');






Route::get('loginadmin',[AdminController::class,'login'])->name('loginadmin');
Route::post('loginadmin',[AdminController::class,'loginadmin'])->name('loginadmin');
Route::get('logout',[AdminController::class,'logout'])->name('logout');

Route::middleware('admin')->group(function(){
    Route::resource('studium', StudiumController::class);
    Route::get('user',[UserController::class,'index'])->name('admin.user');
    Route::post('user/{id}', [UserController::class, 'store'])->name('admin.store');

});
