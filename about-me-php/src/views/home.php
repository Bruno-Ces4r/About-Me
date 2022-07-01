<?php 
if(!($_SESSION)){
    session_start();
}

if(!($_SESSION['username'])){
    header("location:./../login/login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./../admin-css/navbar.css">
    <link rel="stylesheet" href="./../admin-css/home.css">
    <link rel="shortcut icon" href="./../../favicon_io/favicon.ico" type="image/x-icon">
    <title>Home</title>
</head>
<body class="corpo">
    <?php include_once("./../admin-componentes/navbar.php") ?>
    <h1>Mudar o fundo da logo do lobo para Preto, criar restante das páginas do admin(Na home posso colocar os dados dos q entraram em contato), na painel de controle( Colocar opções para o admin seder acesso para outra pessoa), na Ativos(Eu coloco os admins que estão ativos).</h1>
</body>
</html>