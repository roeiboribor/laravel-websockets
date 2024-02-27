<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/playground', function () {
    event(new \App\Events\PlayGroundEvent());
    return null;
});

Route::get('/ws', function () {
    return view('websocket');
});

Route::post('/chat-message', function (Request $request) {
    event(new \App\Events\ChatMessageEvent($request->message));
    return null;
});
