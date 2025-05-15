<?php

use App\Http\Controllers\CekKecilController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\downloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\kasbesarController;
use App\Http\Controllers\kaskecilController;
use App\Http\Controllers\kaskecilsController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\transactionsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'auth'], function () {

	Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('download', [downloadController::class, 'index']);

	Route::get('user-management', [UserController::class, 'index']);

	// Route::group(['middleware' => 'auth'], function () {
	Route::get('download/invoice', [downloadController::class, 'invoice'])->name('invoice.download');
	Route::get('/download', [downloadController::class, 'index'])->name('download.index');

	Route::get('/invoice', [downloadController::class, 'invoice'])->name('invoice.index');
	// 	Route::get('download/invoice/pdf', [downloadController::class, 'downloadPdf'])->name('invoice.download.pdf');
	Route::put('/transactions{id}',[CekKecilController::class, 'update'])->name('ck.update');
	Route::get('/transactions{id}',[CekKecilController::class, 'edit'])->name('ck.edit');
	Route::delete('/transactions{id}', [CekKecilController::class, 'destroy'])->name('ck.delete');
	Route::get('/transactions', [CekKecilController::class, 'create'])->name('ck.create');
	Route::post('/transactions', [CekKecilController::class, 'store'])->name('ck.store');
	Route::get('/transactions', [CekKecilController::class, 'index'])->name('ck.index');	// });

	// Route::get('transactions', [transactionsController::class, 'index'])->name('index');

	Route::delete('/kas-kecil/{id}', [kaskecilController::class, 'destroy'])->name('kecil.delete');
	Route::get('/kas-kecil/{id}', [kaskecilController::class, 'show'])->name('kecil.delete');
	Route::get('/kas-kecil', [kaskecilController::class, 'create'])->name('kecil.create');
	Route::post('/kas-kecil', [kaskecilController::class, 'store'])->name('kecil.store');
	Route::get('/kas-kecil', [kaskecilController::class, 'index'])->name('kecil.index');

	Route::delete('/kas-besar/{id}', [kasbesarController::class, 'destroy'])->name('besar.delete');
	Route::get('/kas-besar', [kasbesarController::class, 'create'])->name('besar.create');
	Route::post('/kas-besar', [kasbesarController::class, 'store'])->name('besar.store');
	Route::get('/kas-besar', [kasbesarController::class, 'index'])->name('besar.index');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

	Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

	Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
	Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
	Route::get('/register', [RegisterController::class, 'create']);
	Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login', [SessionsController::class, 'create']);
	Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
	return view('session/login-session');
})->name('login');
