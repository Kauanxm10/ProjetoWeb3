<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create de Endereço</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="<?php echo e(route("endereco.store")); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="id-input-id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="id-help" disabled
                    value="#">
                <div id="id-help" class="form-text">Não é necessário informar o ID para cadastrar um novo dado.</div>
            </div>
            <div class="mb-3">
                <label for="id-input-descricao" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="id-input-descricao" name="descricao" placeholder="Digite o bairro do endereco">
            </div>
            <div class="mb-3">
                <label for="id-input-descricao" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="id-input-descricao" name="descricao" placeholder="Digite o logradouro do endereco">
            </div>
            <div class="mb-3">
                <label for="id-input-descricao" class="form-label">Número</label>
                <input type="text" class="form-control" id="id-input-descricao" name="descricao" placeholder="Digite o numero do endereco">
            </div>
            <div class="mb-3">
                <label for="id-input-descricao" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="id-input-descricao" name="descricao" placeholder="Digite o complemento do endereco">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="<?php echo e(route("tipoproduto.index")); ?>" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\Users\alunolages\Documents\Aula 35\ProjetoAula3\resources\views/endereco/create.blade.php ENDPATH**/ ?>