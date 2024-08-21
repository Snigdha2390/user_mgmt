<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login');
});
//Route::get('/register', function () {
    //return view('register');
//});
//Route::get('/admin-login', function () {
   // return view('admin.index');
//});
//Route::get('admin-page', function () {
 //   return view('admin.dashboard');
//});
Route::prefix('/admin')->group(function () {
    Route::get('/-login', [AuthController::class, 'getLogin'])->name('getLogin');
    Route::post('/-login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('isAdmin');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('isAdmin');
});

Route::post('/login', [UserController::class, 'login'])->name('user.login');
//Route::post('/login-admin', [AdminController::class, 'login'])->name('admin.login');
Route::get('/register', [UserController::class, 'registerForm'])->name('user.register');
Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::get('/forgot', [UserController::class, 'forgotPassword'])->name('user.forgot');
Route::post('/newPassword', [UserController::class, 'newPassword'])->name('user.newPassword');
Route::post('/newPasswordSet', [UserController::class, 'newPasswordSave'])->name('user.newPasswordSet');

//Route::get('/admin/login', [AdminLoginController::class,'index']);
//Auth::routes();