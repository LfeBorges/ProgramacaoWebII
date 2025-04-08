@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex7_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="numero" class="form-label">Informe o número para somatório:</label>
                            <input type="number" id="numero" name="numero" class="form-control" required="">
                        </div>

                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($somatorio)
        <p>O resultado é {{ $somatorio }}</p>
    @endisset
@endsection