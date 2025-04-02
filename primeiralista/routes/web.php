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

#exercicio 1
Route::get('/exe1', function(){
    return view('lista.exe1');
});

Route::post('listaexe1', function(Request $request){
    $nota1 = floatval($request -> input('nota1'));
    $nota2 = floatval($request -> input('nota2'));
    $nota3 = floatval($request -> input('nota2'));
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return view('lista.exe1', compact('media'));
});


#exercicio 2
Route::get('/exe2', function(){
    return view('lista.exe2');
});

Route::post('/listaexe2', function(Request $request){

    $temperatura = floatval($request -> input('celsius'));
    $fahrenheit = ($temperatura * 9/5) + 32;

    return view('lista.exe2', compact('fahrenheit'));
});

#exercicio 3
Route::get('/exe3', function(){
    return view('lista.exe3');
});

Route::post('/listaexe3', function(Request $request){

    $temperatura = floatval($request -> input('fahrenheit'));
    $celsius = ($temperatura - 32) * 5/9;

    return view('lista.exe3', compact('celsius'));
});

#exercicio 4
Route::get('/exe4', function(){
    return view('lista.exe4');
});

Route::post('/listaexe4', function(Request $request){

    $largura = floatval($request -> input('largura'));
    $altura = floatval($request -> input('altura'));
    $area = ($largura * $altura) / 2; 

    return view('lista.exe4', compact('area'));
});

#exercicio 5
Route::get('/exe5', function(){
    return view('lista.exe5');
});

Route::post('/listaexe5', function(Request $request){
    $raio = floatval($request -> input('raio'));
    $area = pi() * pow($raio, 2);

    return view('lista.exe5', compact('area'));
});


#exercicio 6
Route::get('/ex6', function(){ 
    return view('lista.exe6');
});

Route::post('/lista6', function(Request $request){ 

    $largura = floatval($request -> input('largura'));
    $altura = floatval($request -> input('altura'));
    $perimetro = 2 * ($altura + $largura);

    return view('lista.exe6', compact('perimetro')); 
});

#exercicio 7
Route::get('/exe7', function(){ 
    return view('lista.exe7');
});

Route::post('/listaexe7', function(Request $request){ 
    $raio = floatval($request -> input('raio'));
    $perimetro = 2 * pi() * $raio;

    return view('lista.exe7', compact('perimetro')); 
});

#exercicio 8
Route::get('/exe8', function(){ 
    return view('lista.exe8');
});

Route::post('/listaexe8', function(Request $request){ 

    $base = floatval($request -> input('base'));
    $expoente = floatval($request -> input('expoente'));
    $resultado = pow($base, $expoente);

    return view('lista.exe8', compact('resultado')); 
});

#exercicio 9
Route::get('/exe9', function(){ 
    return view('lista.exe9');
});

Route::post('/exe9', function(Request $request){ 

    $metros = floatval($request -> input('metros'));
    $centimetros = $metros * 100;
    
    return view('lista.exe9', compact('centimetros')); 
});

#exercicio 10
Route::get('/exe10', function(){ 
    return view('lista.exe10');
});

Route::post('/listaexe10', function(Request $request){ 

    $quilometros = floatval($request -> input('quilometros'));
    $milhas = $quilometros * 0.621371;

    return view('exe10', compact('milhas')); 
});

#exercicio 11
Route::get('/exe11', function(){ 
    return view('lista.exe11');
});

Route::post('/listaexe11', function(Request $request){ 

    $peso = floatval($request -> input('peso'));
    $altura = floatval($request -> input('altura'));
    $imc = $peso / ($altura * $altura);
    
    return view('lista.exe11', compact('imc')); 
});

#exercicio 12
Route::get('/exe12', function(){ 
    return view('lista.exe12');
});

Route::post('/listaexe12', function(Request $request){ 

    $preco = floatval($request -> input('preco'));
    $desconto = floatval($request -> input('desconto'));
    $preco_com_desconto = $preco * (1 - $desconto / 100);

    return view('lista.exe12', compact('preco_com_desconto')); 
});


#exercicio13
Route::get('/exe13', function(Request $request){
    return view('lista.exe13');
});

Route::post('/listaexe13', function(Request $request){
    $capital = floatval($request->input('capital'));
    $taxa = floatval($request->input('taxa'));
    $periodo = floatval($request->input('perido'));
    $jsimples = $capital * $taxa * $periodo;
    return view('lista.exe13', compact('jsimples'));

});

#exercicio 14
Route::get('/exe14', function(){ 
    return view('lista.exe14');
});

Route::post('/listaexe14', function(Request $request){ 

    $capital = floatval($request -> input('capital'));
    $taxa = floatval($request -> input('taxa'));
    $periodo = floatval($request -> input('periodo'));
    $montante = $capital + ($capital * ($taxa / 100) * $periodo);

    return view('lista.exe14', compact('montante')); 
});

#exercicio 15
Route::get('/exe15', function(){ 
    return view('lista.exe15');
});

Route::post('/listaexe15', function(Request $request){ 

    $dias = floatval($request -> input('dias'));
    $horas = $dias * 24;
    $minutos = $dias * 24 * 60;
    $segundos = $dias * 24 * 60 * 60;
    $resultado = "{$horas} horas, {$minutos} minutos, {$segundos} segundos";

    return view('lista.exe15', compact('resultado')); 
});
