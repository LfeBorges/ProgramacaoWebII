@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex10_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="numero" class="form-label">Informe o número para tabuada:</label>
                            <input type="number" id="numero" name="numero" class="form-control" required="">
                        </div>

                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($tabuada)
        @if(isset($tabuada) && count($tabuada) > 0)
            <p>Tabuada do número informado:</p>
        <ul>
            @foreach($tabuada as $linha)
                <li>{{ $linha }}</li>
            @endforeach
        </ul>
        @endif

    @endisset
@endsection