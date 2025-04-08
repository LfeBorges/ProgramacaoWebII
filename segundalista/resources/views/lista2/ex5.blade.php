@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex5_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="mes" class="form-label">Informe o mês (1 a 12):</label>
                            <input type="number" id="mes" name="mes" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($nomeMes)
        <p>O resultado é {{ $nomeMes }}</p>
    @endisset
@endsection