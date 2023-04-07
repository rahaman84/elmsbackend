<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\HomePageEtcController;




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/chartdata',[ChartController::class, 'onAllSelect']);

Route::get('/ClientReview',[ClientReviewController::class, 'onAllSelect']);

Route::post('/ContactSend',[ContactController::class, 'onContactSend']);

Route::get('/CoursesHome',[CoursesController::class, 'onSelectFour']);
Route::get('/CoursesAll',[CoursesController::class, 'onSelectAll']);
Route::post('/CoursesDetails',[CoursesController::class, 'onSelectDetails']);

Route::get('/Footerdata',[FooterController::class, 'onSelectAll']);
Route::get('/Information',[InformationController::class, 'onSelectAll']);

Route::get('/services',[ServiceController::class, 'ServiceView']);


Route::get('/ProjectsHome',[ProjectController::class, 'onSelectThree']);
Route::get('/ProjectsAll',[ProjectController::class, 'onSelectAll']);

Route::get('/ProjectDetails/{projectId}',[ProjectController::class, 'ProjectDetails']);


Route::get('/home/video',[HomePageEtcController::class, 'SelectVideo']);
Route::get('/totalhome',[HomePageEtcController::class, 'SelectTotalHome']);
Route::get('/techhome',[HomePageEtcController::class, 'SelectTechHome']);
Route::get('/homepage/title',[HomePageEtcController::class, 'SelectHomeTitle']);

