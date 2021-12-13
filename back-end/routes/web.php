<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::middleware(['cors'])->group(function () {
    Route::post('/hogehoge', 'Controller@hogehoge');
});

Route::get('/', function () {
    return view('welcome');
});

header("Access-Control-Allow-Origin: *");

Route::get('/events', function () {

    $users = DB::select('select * from events');

    return response()->json($users);
    
});

Route::get('/formations', function () {

    $formations = DB::select('select * from formation');

    return response()->json($formations);
    
});

Route::get('/videos', function () {

    $videos = DB::select('select * from videos');

    return response()->json($videos);
    
});
