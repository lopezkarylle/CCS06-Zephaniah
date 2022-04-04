<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZephaniahController;
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

Route::get('/', [ZephaniahController::class, 'index']);
Route::get('/chapter/{chapter_number}', [ZephaniahController::class, "readByChapter"]);
Route::get('/all-chapters', [ZephaniahController::class, 'readAllChapters']);
