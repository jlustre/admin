<?php

use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\StepsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/get-visitor', [VisitorController::class, 'GetVisitorDetails']);
Route::get('/get-all-site-info', [SiteInfoController::class, 'GetAllSiteInfo']);
Route::get('/get-all-steps', [StepsController::class, 'GetAllSteps']);
Route::post('/post-contact', [ContactController::class, 'PostContactDetails']);

Route::post('/login',[RegisterController::class, 'Login']);
Route::post('/register',[RegisterController::class, 'Register']);

Route::middleware('auth:api')->group( function () {
    Route::resource('/products', ProductController::class);
});