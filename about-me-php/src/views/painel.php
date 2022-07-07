<?php 
session_start();

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./../admin-css/navbar.css">
    <link rel="stylesheet" href="./../admin-css/painel.css">
    <link rel="stylesheet" href="./../admin-css/side-navbar.css">
    <link rel="shortcut icon" href="./../../favicon_io/favicon.ico" type="image/x-icon">
    <title>Painel de Controle</title>
</head>
<body class="corpo">
    <?php include_once("./../admin-componentes/navbar.php") ?>
    <h1>Fazer gráficos com ChartJs</h1>

</body>
</html>