<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>

<body>
    <h1>Laravel</h1>
    <?php echo '<p>Elemento gerado pelo php</p>'; ?>
    <?php $teste = true; ?>
    <?php if( ($teste) ) { ?>
    <?php echo '<p>Verdadeiro</p>'; ?>
    <?php } ?>
    @if ($teste)
        <p>Verdadeiro</p>
    @endif
    @for ($i = 0; $i < 3; $i++)
        <p>Execução {{$i}} do for</p>
    @endfor
</body>

</html>
