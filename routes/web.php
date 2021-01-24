<?php

use App\Http\Controllers\UserDashboard;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('/home', [UserDashboard::class,'userInfo']);

// Route::prefix('home')->group(function () {
//     Route::get('/', [UserDashboard::class,'userInfo']);
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [UserDashboard::class,'userInfo']);
    Route::get('/summary', [UserDashboard::class,'summaryInfo']);
    Route::get('/education', [UserDashboard::class,'educationInfo']);
    Route::get('/experiece', [UserDashboard::class,'experienceInfo']);

    Route::get('/keyskill', [UserDashboard::class,'keyskillInfo']);
    Route::get('/tranning', [UserDashboard::class,'tranningInfo']);
    Route::get('/achivement', [UserDashboard::class,'achivementInfo']);


});
require __DIR__.'/auth.php';
