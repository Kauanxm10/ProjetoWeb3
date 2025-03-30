<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create de Produto</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="{{ route('produto.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="id-input-id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="id-help" disabled
                    value="#">
                <div id="id-help" class="form-text">Não é necessário informar o ID para cadastrar um novo dado.</div>
            </div>
            <div class="mb-3">
                <label for="id-input-nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="id-input-nome" name="nome"
                    placeholder="Digite o nome do produto">
            </div>
            <div class="mb-3">
                <label for="id-input-preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="id-input-preco" name="preco"
                    placeholder="Digite o preço do produto" step=".01">
            </div>
            <div class="mb-3">
                <label for="id-input-Tipo_Produtos_id" class="form-label">Tipo</label>
                <select name="Tipo_Produtos_id" class="form-select">
                    @foreach ($tipoProdutos as $tipoProduto)
                        <option value="{{ $tipoProduto->id }}">{{ $tipoProduto->descricao }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id-input-ingredientes" class="form-label">ingredientes</label>
                <input type="text" class="form-control" id="id-input-ingredientes" name="ingredientes"
                    placeholder="Digite os ingredientes do produto">
            </div>
            <div class="mb-3">
                <label for="id-input-imagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="id-input-imagem" name="imagem">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('produto.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>
