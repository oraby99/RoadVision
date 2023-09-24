<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\userShared;

Route::middleware('isApiUser')->group(function() {

});
//Route::post('/logout', [ApiAuthController::class,'logout']);
Route::post('/user/handle-register', [ApiAuthController::class,'handleRegister']);
Route::post('/user/handle-login', [ApiAuthController::class,'handleLogin']);

Route::post('/user/changePassword/{id}', [userShared::class,'changePassword']);
Route::post('/user/EditProfile/{id}', [userShared::class,'EditProfile']);
Route::get('/user/getUserById/{id}', [userShared::class,'getUserById']);
Route::post('/user/checkEmail', [userShared::class,'checkEmail']);
Route::post('/user/sendOtp', [userShared::class,'sendOtp']);
Route::post('/user/sendFeedback', [userShared::class,'sendFeedback']);
Route::post('/user/sendReport', [ReportController::class,'sendReport']);
Route::get('/user/getReportById/{id}', [ReportController::class,'getReportById']);

//EMPLOYEE
Route::post('/employee/handle-login',     [ApiAuthController::class,'handleEmpLogin']);
Route::post('/employee/sendReport',         [FileController::class,'sendFile']);
Route::get('/employee/getReportById/{id}', [FileController::class,'getFiletById']);

/////////////////////////////////
Route::post('/employee/sendFile',         [TestController::class,'sendFile']);
Route::get('/employee/getFileById/{id}',  [TestController::class,'getFiletById']);
Route::post('/employee/deletefile/{id}',  [TestController::class,'deletefile']);
