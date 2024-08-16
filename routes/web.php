<?php
use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});

//Route::get('/admin/login', [AdminLoginController::class,'index']);
//Auth::routes();