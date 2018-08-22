<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <div class="">
        <a href="/pdo/">Inicio</a>
        <a href="/pdo/create_user">Cadastrar</a>
    </div>

    <!-- séra o template -->
    <div class="container">
        <?= require $template->load() ?> <!-- vai carregar as pages que forem chamadas -->
    </div>

</body>
</html>