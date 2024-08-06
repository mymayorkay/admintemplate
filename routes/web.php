<?php
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('users', [UserController::class, 'users']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('searchdemo', [UserController::class, 'mysearch']);
Route::get('autocomplete', [UserController::class, 'autocomplete'])->name('autocomplete');


/*
SCAN QRCODE IMAGE UPLOADING

*/

Route::get('/generate-qr', [ImageController::class, 'generateQrCode']);
Route::get('/upload', [ImageController::class, 'showUploadForm']);
Route::post('/upload', [ImageController::class, 'uploadImage']);
Route::get('/images', [ImageController::class, 'viewImages']);




