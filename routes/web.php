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
    return view('home/index');
})->name("home.index");



Route::get('/comics', function () {
    $dati_cards = config("comics");
    $dati_finali =[];
    foreach($dati_cards as $index=>$card){
        $card['id']=$index;
        $dati_finali[]=$card;
    }
    return view('comics.index',["list_cards" => $dati_finali]);
})->name("comics.index");



Route::get("comics/{id?}", function($id){

   $data = config("comics");
   $card = $data[$id];
   return view("comics.detail", ["card"=>$card]);
})->name("comics.detail");

