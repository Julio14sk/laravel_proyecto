<?php

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

Route::get('/saludito/{name?}', function ($name="Hermoso") {
    return view('saludito', ['name' => $name]);
});

Route::get('/saludo/{nombre}/{apellido?}', function (string $nombre,$apellido=" Mongolito") {
    return 'hola '.$nombre.' '.$apellido;
})->where(['nombre ' => '[a-z]+',' apellido' => '[a-z]+']);

Route::get('/suma/{n1}/{n2}', function ($n1, $n2) {
    return $n1 + $n2;
})->where(['n1' => '[0-9]+',' n2' => '[0-9]+']);

Route::get('/resta/{n1}/{n2}', function ($n1, $n2) {
    return $n1 - $n2;
})->where(['n1' => '[0-9]+',' n2' => '[0-9]+']);

Route::get('/producto/{n1}/{n2}', function ($n1, $n2) {
    return $n1 * $n2;
})->where(['n1' => '[0-9]+',' n2' => '[0-9]+']);

Route::get('/division/{n1}/{n2}', function ($n1, $n2) {
    return $n1 / $n2;
})->where(['n1' => '[0-9]+',' n2' => '[0-9]+']);

