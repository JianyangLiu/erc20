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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return view('test');
});

Route::get('/Finance/balance',function(){
    return view('balance');
});

Route::get('/Finance/history',function(){
    return view('history');
});

Route::get('/User/wallet',function(){
    return view('wallet');
});

Route::get('/date',function(){
    return view('date');
});

Route::get('/User/wallet/coin/btc.html',function(){
    return view('coinbtc');
});
Route::get('/User/wallet/coin/eos.html',function(){
    return view('coineos');
});
Route::get('/User/wallet/coin/eth.html',function(){
    return view('coineth');
});
Route::get('/User/wallet/coin/hpy.html',function(){
    return view('coinhpy');
});
Route::get('/User/wallet/coin/leek.html',function(){
    return view('coinleek');
});
Route::get('/User/wallet/coin/neo.html',function(){
    return view('coinneo');
});

Route::get('/Finance/project',function(){
    return view('project');
});

Route::get('/Finance/project/status/1',function(){
    return view('status1');
});

Route::get('/Finance/project/status/2',function(){
    return view('status2');
});

Route::get('/user/moble',function(){
    return view('moble');
});

Route::get('/User/email',function(){
    return view('email');
});
Route::get('/User/ga',function(){
    return view('ga');
});
Route::get('/Finance/changepassword',function(){
    return view('changepassword');
});
Route::get('/Finance/paypassword',function(){
    return view('paypassword');
});
Route::get('/Finance/findpaypwd',function(){
    return view('findpaypwd');
});
Route::get('/Finance/profile',function(){
    return view('profile');
});
Route::get('/Finance/notification',function(){
    return view('notification');
});
Route::get('/Finance/notification1',function(){
    return view('notification1');
});
