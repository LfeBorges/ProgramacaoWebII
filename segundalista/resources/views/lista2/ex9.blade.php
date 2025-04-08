@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex9_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="numero" class="form-label">Informe o número para fatorar:</label>
                            <input type="number" id="numero" name="numero" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($fatorial)
        <p>O resultado é {{ $fatorial }}</p>
    @endisset
@endsection