<?php

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

Route::get('/', function () {
    return view('welcome');
});
/* Route::get('/mail', function () {
    return view('emails.notificacion');
});
Route::get('enviar', ['as' => 'enviar', function () {
    $data = ['link' => 'http://styde.net'];
    \Mail::send('emails.notificacion', $data, function ($message) {
        $message->from('email@styde.net', 'Styde.Net');
        $message->to('jorge.benavides@facturatech.co')->subject('Confirmación');
    });
    return "Se envío el email";
}]);
Route::get('enviar2', ['as' => 'enviar', function () {
    $data = ['link' => 'http://styde.net'];
    \Mail::send('emails.test', $data, function ($message) {
        $message->from('email@styde.net', 'Styde.Net');
        $message->to('jorge.benavides@facturatech.co')->subject('Test');
    });
    return "Se envío el email";
}]); */