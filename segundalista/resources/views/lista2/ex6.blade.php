@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex6_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="numero" class="form-label">Informe o número para contagem:</label>
                            <input type="number" id="numero" name="numero" class="form-control" required="">
                        </div>

                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($contagem)
        @if(isset($contagem) && count($contagem) > 0)
        <p>Contagem progressiva:</p>
        <ul>
            @foreach($contagem as $num)
                <li>{{ $num }}</li>
            @endforeach
        </ul>
    @endif

    @endisset
@endsection
