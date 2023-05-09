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
    // per accedere ai dati di un file di configurazione dobbiamo utilizzare
    // la funzione config()
    $pasta = config('pasta');

    // con dd() possiamo visualizzare un var_dump dettagliato e interattivo
    // più consono per le applicazioni laravel
    // il dd() BLOCCA l'esecuzione della nostra pagina
    // dd($pasta);

    

    return view('home', compact('pasta'));
})->name('home');
