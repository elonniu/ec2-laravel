<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (Request $request) {
    return new \Illuminate\Http\JsonResponse([
                                                 'client_ip'   => $request->getClientIp(),
                                                 'remote_addr' => $_SERVER['REMOTE_ADDR'],
                                                 'server_addr' => $_SERVER['SERVER_ADDR'],
                                             ]);
});
