<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create de Endereço</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="{{route("endereco.store")}}">
            @csrf
            <div class="mb-3">
                <label for="id-input-id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="id-help" disabled
                    value="#">
                <div id="id-help" class="form-text">Não é necessário informar o ID para cadastrar um novo dado.</div>
            </div>
            <div class="mb-3">
                <label for="id-input-bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="id-input-descricao" name="bairro" placeholder="Digite o bairro do endereco">
            </div>
            <div class="mb-3">
                <label for="id-input-logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="id-input-descricao" name="logradouro" placeholder="Digite o logradouro do endereco">
            </div>
            <div class="mb-3">
                <label for="id-input-numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="id-input-numero" name="numero" placeholder="Digite o numero do endereco">
            </div>
            <div class="mb-3">
                <label for="id-input-complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="id-input-complemento" name="complemento" placeholder="Digite o complemento do endereco">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{route("endereco.index")}}" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>
