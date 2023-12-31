<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\DocumentoLiquidacaoController;
use App\Http\Controllers\ExecFFinanceiraController;
use App\Http\Controllers\OrgaoController;
use App\Http\Controllers\UnidadeGestoraController;
use App\Http\Controllers\UnidadeOrcamentariaController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use Illuminate\Support\Facades\Http;          
            

Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
	
	Route::get('cidade-create', [CidadeController::class, 'create'])->middleware('auth')->name('cidade-create');
	Route::get('cidade-index', [CidadeController::class, 'index'])->middleware('auth')->name('cidade-index');
	Route::post('cidade-show', [CidadeController::class, 'show'])->middleware('auth')->name('cidade-show');
	Route::post('cidade-store', [CidadeController::class, 'store'])->middleware('auth')->name('cidade-store');

	Route::get('documento_liquidacao-create', [DocumentoLiquidacaoController::class, 'create'])->middleware('auth')->name('documento_liquidacao-create');
	Route::post('documento_liquidacao-store', [DocumentoLiquidacaoController::class, 'store'])->middleware('auth')->name('documento_liquidacao-store');
	Route::get('exec_f_financeira-create', [ExecFFinanceiraController::class, 'create'])->middleware('auth')->name('exec_f_financeira-create');
	Route::post('exec_f_financeira-store', [ExecFFinanceiraController::class, 'store'])->middleware('auth')->name('exec_f_financeira-store');

	Route::post('orgao-show2', [OrgaoController::class, 'show2'])->middleware('auth')->name('orgao-show2');
	Route::post('unidadeGestora-show2', [UnidadeGestoraController::class, 'show2'])->middleware('auth')->name('unidadeGestora-show2');
	Route::post('unidadeOrcamentaria-show2', [UnidadeOrcamentariaController::class, 'show2'])->middleware('auth')->name('unidadeOrcamentaria-show2');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});