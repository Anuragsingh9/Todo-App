<?php

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

use Modules\SuperAdmin\Http\Controllers\SuperAdminController;

Route::prefix('superadmin')->group(function() {
    Route::view('/reg','superadmin::auth.register')->name('reg');






    Route::get('/', [SuperAdminController::class,'firstMethod']);
    Route::get('/createAcc', [SuperAdminController::class,'createAccount']);
});
