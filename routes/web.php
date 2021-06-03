<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

use App\Http\Controllers\Blood_inventoryController;
use App\Http\Controllers\BloodstoreController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('index');
});
Route::resources([
    'projects' => ProjectController::class,
    'Blood_inventoryControlleries' => Blood_inventoryController::class
]);
Route::get('/ok',[Blood_inventoryController::class,'ok']);
Route::post('/okk',[Blood_inventoryController::class,'okk']);
Route::get('/select',[Blood_inventoryController::class,'select']);
Route::get('bloodstore',[BloodstoreController::class,'bloodstore']);
Route::post('insert',[BloodstoreController::class,'insert']);
Route::get('handover',[BloodstoreController::class,'handover']);
Route::get('register',[ProjectController::class,'register']);
Route::get('/userView', [ProjectController::class,'userView']);

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


