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

    
    $data = config('pasta_db');
    $info = config('info_db');


    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach($data as $key => $pasta) {

        $pasta['id'] = $key;

        if($pasta['tipo'] == 'lunga') {
            $lunga[] = $pasta;
        } elseif ($pasta['tipo'] == 'corta') {
            $corta[] = $pasta;
        } elseif ($pasta['tipo'] == 'cortissima') {
            $cortissima[] = $pasta;
        }
    }

    return view('home', [
        'lunghe' => $lunga,    
        'corte' => $corta,    
        'cortissime' => $cortissima,
        'informazioni' => $info,    
    ]); 
})->name('homepage');

Route::get('/news', function () {
    $info = config('info_db');

    return view('news', [
        'informazioni' => $info,    
    ]);
})->name('news');


Route::get('prodotto/{id?}', function ($id = 10) {
    $data = config('pasta_db');
    $info = config('info_db');
    
    if ($id >= count($data)) {
        abort(404);
    }

    // Last product
    if($id == count($data) - 1) {
        $prev = $id - 1;
        $next = 0;
    // First  product
    } elseif($id == 0) {
        $prev = count($data) - 1;
        $next = $id + 1;
    } else {
        $prev = $id - 1;
        $next = $id + 1;
    }

    $pasta = $data[$id];

    return view('prodotto', [
        'pasta' => $pasta,
        'prev_product' => $prev,
        'next_product' => $next,
        'informazioni' => $info,    
    ]);
})->where('id', '[0-9]+')->name('prodotto');