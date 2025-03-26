<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Produtos</h1>
    <a class="btn btn-primary" href="/produtos/create">Novo produto</a>

    @if (session('erro'))
        <div class="alert alert-danger">
            {{session('erro')}}
        </div>
    @endif

    @if (session('sucesso'))
        <div class="alert alert-danger">
            {{session('sucesso')}}
        </div>
    @endif

    
    <h2>Registro de Produtos</h2>
                        <a href="#" class="btn btn-success mb-3">Novo Registro</a>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Produto</th><th>Nome da Categoria</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $p)
                                    <tr>
                                        <td>{{$p->id}}</td>
                                        <td>{{$p->nome}}</td>
                                        <td>{{$p->categoria->nome}}</td>
                                            <a href="/produtos/{{$p->id}}/edit" class="btn btn-warning">Editar</a>
                                            <a href="/produtos/{{$p->id}}" class="btn btn-info">Consultar</a>
                                        </td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td>2</td>
                                        <td>Exemplo</td><td>Exemplo</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-info">Consultar</a>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td>3</td>
                                        <td>Exemplo</td><td>Exemplo</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-info">Consultar</a>
                                        </td>
                                    </tr>
                                
                                    <tr>
                                        <td>5</td>
                                        <td>Exemplo</td><td>Exemplo</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-info">Consultar</a>
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table>
                

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>