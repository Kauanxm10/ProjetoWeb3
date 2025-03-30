<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit de Endereço</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="<?php echo e(route('endereco.update', $endereco->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="mb-3">
                <label for="id-input-id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="id-help" disabled
                    value="<?php echo e($endereco->id); ?>">
                <div id="id-help" class="form-text">Não é necessário informar o ID para cadastrar um novo dado.</div>
            </div>
            <div class="mb-3">
                <label for="id-input-bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="id-input-nome" name="bairro"
                    placeholder="Digite o nome do bairro" value="<?php echo e($endereco->bairro); ?>">
            </div>
            <div class="mb-3">
                <label for="id-input-logradouro" class="form-label">Logradouro</label>
                <input type="number" class="form-control" id="id-input-preco" name="logradouro"
                    placeholder="Digite o logradouro do endereco" step=".01" value="<?php echo e($endereco->logradouro); ?>">
            </div>
            <div class="mb-3">
                <label for="id-input-numero" class="form-label">Número</label>
                <input type="number" class="form-control" id="id-input-numero" name="numero"
                    placeholder="Digite o numero do endereco" step=".01" value="<?php echo e($endereco->numero); ?>">
            </div>
            <div class="mb-3">
                <label for="id-input-complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="id-input-complemento" name="complemento"
                    placeholder="Digite os complementos do endereco" value="<?php echo e($endereco->complemento); ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="<?php echo e(route('endereco.index')); ?>" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\Users\alunolages\Documents\Aula 35\ProjetoAula3\resources\views/endereco/edit.blade.php ENDPATH**/ ?>