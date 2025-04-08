<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    #exercicio_exemplo
    public function abrirFormulario()
    {
        return view('formulario');
    }

    public function calcularFormulario(Request $request)
    {
        $valor1 = (int) $request->input("valor1");
        $valor2 = (int) $request->input("valor2");

        $soma = $valor1 + $valor2;
        return view("formulario", compact("soma"));
    }

    #exercicio 1
    public function abrirCalcularSoma()
    {
        return view("lista2.ex1");
    }

    public function calcularSoma(Request $request)
    {
        $valor1 = (int) $request->input("valor1");
        $valor2 = (int) $request->input("valor2");

        $resultado = ($valor1 === $valor2) ? (($valor1 + $valor2) * 3) : ($valor1 + $valor2);
        return view("lista2.ex1", compact("resultado"));
    }

    #exercicio 2
    public function abrirValores()
    {
        return view("lista2.ex2");
    }

    public function Valores(Request $request)
    {
        $X = (int) $request->input("X");
        $Y = (int) $request->input("Y");

        if ($X === $Y) {
            $mensagem = "Números iguais: $X";
        } else {

            $valores = [$X, $Y];
            sort($valores);
            $mensagem = "Valores em ordem crescente: " . implode(", ", $valores);
        }

        return view("lista2.ex2", compact("mensagem"));
    }

    #exercicio 3
    public function abreProduto()
    {
        return view("lista2.ex3");
    }

    public function produto(Request $request)
    {
        $valor = (int) $request->input("valor");


        $valorNovo = $valor > 100 ? $valor * 1.15 : $valor;

        return view("lista2.ex3", compact("valorNovo"));
    }

    #exercicio 4
    public function abrePrimos()
    {
        return view("lista2.ex4");
    }

    public function primos(Request $request)
    {
        $numero = (int) $request->input("numero");
        $numerosPrimos = [];

 
        for ($i = 2; $i <= $numero; $i++) {
            $ehPrimo = true;


            for ($j = 2; $j <= (int) sqrt($i); $j++) {
                if ($i % $j === 0) {
                    $ehPrimo = false;
                    break;
                }
            }

            if ($ehPrimo) {
                $numerosPrimos[] = $i;
            }
        }

        return view("lista2.ex4", compact("numerosPrimos"));
    }

    #exercicio 5
    public function abreMeses()
    {
        return view("lista2.ex5");
    }

    public function meses(Request $request)
    {
        $mes = (int) $request->input("mes");

        $meses = [
            1  => "Janeiro",
            2  => "Fevereiro",
            3  => "Março",
            4  => "Abril",
            5  => "Maio",
            6  => "Junho",
            7  => "Julho",
            8  => "Agosto",
            9  => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        ];

        $nomeMes = isset($meses[$mes]) ? $meses[$mes] : "Mês inválido";

        return view("lista2.ex5", compact("nomeMes"));
    }

    #exercicio 6
    public function abreNumeros()
    {
        return view("lista2.ex6");
    }

    public function numeros(Request $request)
    {
        $numero = (int) $request->input("numero");
        $contagem = [];


        for ($i = 0; $i <= $numero; $i++) {
            $contagem[] = $i;
        }

        return view("lista2.ex6", compact("contagem"));
    }

    #exercicio 7
    public function abreSomatorio()
    {
        return view("lista2.ex7");
    }

    public function somatorio(Request $request)
    {
        $numero = (int) $request->input("numero");
        $somatorio = 0;

        for ($i = 1; $i <= $numero; $i++) {
            $somatorio += $i;
        }

        return view("lista2.ex7", compact("somatorio"));
    }

    #exercicio 8
    public function abreRegressiva()
    {
        return view("lista2.ex8");
    }

    public function regressiva(Request $request)
    {
        $numero = (int) $request->input("numero");
        $regressiva = [];


        for ($i = $numero; $i >= 0; $i--) {
            $regressiva[] = $i;
        }

        return view("lista2.ex8", compact("regressiva"));
    }

    #exercicio 9
    public function abreFatorial()
    {
        return view("lista2.ex9");
    }

    public function fatorial(Request $request)
    {
        $numero = (int) $request->input("numero");
        $fatorial = 1;


        for ($i = $numero; $i > 1; $i--) {
            $fatorial *= $i;
        }

        return view("lista2.ex9", compact("fatorial"));
    }

    #exercicio 10
    public function abreTabuada()
    {
        return view("lista2.ex10");
    }

    public function tabuada(Request $request)
    {
        $numero = (int) $request->input("numero");
        $tabuada = [];


        for ($i = 1; $i <= 10; $i++) {
            $tabuada[] = "$numero x $i = " . ($numero * $i);
        }

        return view("lista2.ex10", compact("tabuada"));
    }
}
