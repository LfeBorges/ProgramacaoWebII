<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/bem-vindo', function () {
    return "Seja bem vindo!";
} );

#exemplo
Route::get('/exer1', function (){
    return view('exer1');
});

Route::post('/exer1resp', function(Request $request){
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma = $valor1 + $valor2;
    return view('exer1', compact('soma'));

});

#exercicio13
Route::get('/exe13resp', function(Request $request){
    return view('exe13');
});

Route::post('/exe13resp', function(Request $request){
    $capital = floatval($request->input('capital'));
    $taxa = floatval($request->input('taxa'));
    $periodo = floatval($request->input('perido'));
    $jsimples = $capital * $taxa * $periodo;
    return view('exe13', compact('jsimples'));

});