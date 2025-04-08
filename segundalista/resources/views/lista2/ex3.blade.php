@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex3_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="valor" class="form-label">Informe o valor do produto:</label>
                            <input type="number" id="valor" name="valor" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($valorNovo)
        <p>O resultado é {{ $valorNovo }}</p>
    @endisset
@endsection