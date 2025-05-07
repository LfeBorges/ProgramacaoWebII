<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Minha Loja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Banner do E-commerce -->
    <div class="container-fluid p-0 mb-5">
        <img src="banner.jpg" alt="Banner do E-commerce" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
    </div>

    <!-- Cards de Produtos -->
    <div class="container">
        <h2 class="text-center mb-4">Nossos Produtos</h2>
        <div class="row g-4">

            <!-- Produto 1 -->
             @foreach($produtos as $p)
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="produto1.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->nome}}</h5>
                        <p class="card-text">{{$p->descricao}}</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Produto 2 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="produto2.jpg" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->nome}}</h5>
                        <p class="card-text">{{$p->descricao}}</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="produto3.jpg" class="card-img-top" alt="Produto 3">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Produto 3</h5>
                        <p class="card-text">R$ 79,90</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Adicione mais produtos duplicando os blocos acima -->

        </div>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
