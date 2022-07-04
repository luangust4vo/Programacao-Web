<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca CEP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <h1>Buscar dados do CEP: </h1>

    <form action="" method="post">
        <label for="cep">CEP: </label>
        <input type="text" name="cep" id="cep">

        <input type="submit" value="Buscar">
    </form>

    <?php
    @$cep = trim($_POST["cep"]);

    if ($cep != "") {
        //include não retorna nenhum erro caso não exista o arquivo, enquanto o require retorna um FATAL_ERROR
        require_once("funcoes.php");

        $endereco = buscarCEP($cep);
    ?>
        <p>CEP: <?= $endereco ?></p>

    <?php
    }
    ?>
</body>

</html>