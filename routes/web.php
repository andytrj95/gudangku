<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\masterBarangController;
use App\Http\Controllers\PersediaanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\masterbarang;
use Database\Factories\masterBarangFactory;

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
    return view('auth/login');
});
 
// Route::get('/sign-up', function () {
//     return view('authentication/sign-up');
// });

// Route::get('/sign-up',[RegisterController::class, 'index']);
// Route::post('/sign-up',[RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth'); 
Route::get('/dashboard/barang' , [masterBarangController::class , 'index'])->middleware('auth');
Route::get('/dashboard/barang/create' , [masterBarangController::class , 'create'])->middleware('auth');
Route::get('/dashboard/persediaan' , [PersediaanController::class , 'index'])->middleware('auth');
Route::post('/dashboard/barang', [masterBarangController::class, 'store']);
Route::get('/dashboard/barang/{masterbarang}', [masterBarangController::class, 'show'])->middleware('auth');;
Route::get('/dashboard/barang/{masterbarang}/edit', [masterBarangController::class, 'edit']);
Route::patch('/dashboard/barang/{masterbarang}' ,[masterBarangController::class , 'update']);
