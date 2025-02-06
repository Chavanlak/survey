<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use SimpleSoftwareIO\Qrcode\Facades\Qrcode;

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
Route::get('/test', function () {
    return view('test');
});
Route::get('/surveytest', [FeedbackController::class, 'index']);
Route::post('/surveytest', [FeedbackController::class, 'store']);

Route::get('/survey', function () {
    return view('survey');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::get('show',[QuestionController::class,'getAll']);

// Route::get('/', function () {
//     $sting = 'hey there';
//     $qrcode = Qrcode::genarate($string);
//     return view('qr');
// });