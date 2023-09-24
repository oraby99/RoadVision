<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AuthController;

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
// Route::get('/dashboard', function () {
//     return view('dashboard.community.index');
// })->middleware(['auth'])->name('dashboard');
// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth'])->name('dashboard');


Route::middleware('isLogin')->group(function(){
Route::get('/',[HomeController::class,'welcome'])->name('welcome');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/index',[HomeController::class,'index'])->name('index');
Route::get('/Home',[HomeController::class,'analysis'])->name('Home');
Route::get('/file',[HomeController::class,'file'])->name('file');
Route::get('/Home/show/{id}',[HomeController::class,'show'])->name('show');
Route::get('/report',[HomeController::class,'report'])->name('report');
Route::get('/profile',[HomeController::class,'profile'])->name('profile');
Route::get('/map',[HomeController::class,'map'])->name('map');

});

Route::get('login', [AuthController::class, 'login'])
->name('login');

Route::post('handle-login', [AuthController::class, 'handleLogin'])
->name('handleLogin');

Route::get('logout', [AuthController::class, 'logout'])
->name('logout');


Route::group(['middleware' => 'auth','prefix' => 'users'], function (){
    $route = 'dashboard.users.';
    Route::get('index',[UserController::class,'index'])->name($route.'index');
    Route::get('data',[UserController::class,'data'])->name($route.'data');
    Route::get('create',[UserController::class,'create'])->name($route.'create');
    Route::get('edit/{id}',[UserController::class,'edit'])->name($route.'edit');
    Route::get('delete/{id}',[UserController::class,'delete'])->name($route.'delete');
    Route::post('store',[UserController::class,'store'])->name($route.'store');
    // Route::post('update/{id}',$controller.'update')->name($route.'update');
    // Route::post('muli-delete',$controller.'multiDelete')->name($route.'multi-delete');
});
require __DIR__.'/auth.php';
