<?php

use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\StepsController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/get-visitor', [VisitorController::class, 'GetVisitorDetails']);
Route::get('/get-all-site-info', [SiteInfoController::class, 'GetAllSiteInfo']);
Route::get('/get-all-steps', [StepsController::class, 'GetAllSteps']);
Route::post('/post-contact', [ContactController::class, 'PostContactDetails']);