<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="conatainer">
    <h1>Editar Produto</h1>

    <form method="post" action="/produtos/{{ $produto->id}}">
        @CSRF
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Informe o nome</label>
            <input type="text" id="nome" name="nome" value="{{ $produto->nome}}" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Informe a descrição</label>
            <textarea id="descricao" name="descricao" value="{{ $produto->descricao}}" class="form-control" rows="4" required=""></textarea>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Informe o preço</label>
            <input type="number" id="preco" name="preco" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="estoque" class="form-label">Informe o estoque</label>
            <input type="text" id="estoque" name="estoque" value="{{ $produto->estoque}}"class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="categoria" class="form-label">Informe a categoria</label>
            <select id="categoria" name="categoria" class="form-select" required="">
            @foreach ($categorias as $c)
                <option value="{{ $c ->id}}" {{$produto->categoria_id == $c->id ? "select" : ""}}>
                    {{$c ->nome}}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>