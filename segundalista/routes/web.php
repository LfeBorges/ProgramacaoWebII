<?php

use App\Http\Controllers\ExerciciosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#exemplo
Route::get("/formulario", [ExerciciosController::class, 'abrirFormulario']);
Route::post("/formulario_resposta", [ExerciciosController::class, "calcularFormulario"]);

#exercicio1
Route::get("/ex1", [ExerciciosController::class, 'abrirCalcularSoma']);
Route::post("/ex1_resposta", [ExerciciosController::class, "calcularSoma"]);

#exercicio2
Route::get("/ex2", [ExerciciosController::class, 'abrirValores']);
Route::post("/ex2_resposta", [ExerciciosController::class, "Valores"]);

#exercicio3
Route::get("/ex3", [ExerciciosController::class, 'abreProduto']);
Route::post("/ex3_resposta", [ExerciciosController::class, "produto"]);

#exercicio4
Route::get("/ex4", [ExerciciosController::class, 'abrePrimos']);
Route::post("/ex4_resposta", [ExerciciosController::class, "primos"]);

#exercicio5
Route::get("/ex5", [ExerciciosController::class, 'abreMeses']);
Route::post("/ex5_resposta", [ExerciciosController::class, "meses"]);

#exercicio6
Route::get("/ex6", [ExerciciosController::class, 'abreNumeros']);
Route::post("/ex6_resposta", [ExerciciosController::class, "numeros"]);

#exercicio7
Route::get("/ex7", [ExerciciosController::class, 'abreSomatorio']);
Route::post("/ex7_resposta", [ExerciciosController::class, "somatorio"]);

#exercicio8
Route::get("/ex8", [ExerciciosController::class, 'abreRegressiva']);
Route::post("/ex8_resposta", [ExerciciosController::class, "regressiva"]);

#exercicio9
Route::get("/ex9", [ExerciciosController::class, 'abreFatorial']);
Route::post("/ex9_resposta", [ExerciciosController::class, "fatorial"]);

#exercicio10
Route::get("/ex10", [ExerciciosController::class, 'abreTabuada']);
Route::post("/ex10_resposta", [ExerciciosController::class, "tabuada"]);