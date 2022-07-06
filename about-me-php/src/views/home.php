<?php 
session_start();

if(!($_SESSION['username'])){
    header("location:./../login/login.php");
}

require_once("./../action/conexao.php");
$db = conecta();

$sql = "SELECT id,nome,email,oportunidade,date(dia_inclusao),time(dia_inclusao) FROM tb_contact";

$query = $db->query( $sql );

$registros = $query->fetchall();
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
    <h1 class="titulo">Contacts</h1>

    <div class="container">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Oportunity</th>
                        <th scope="col">Creation day</th>
                        <th scope="col">Creation Hour</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $id = 0;
                    $name = 1;
                    $email = 2;
                    $oportunity = 3;
                    $day = 4;
                    $hour = 5;
                    $i = 0;
                    foreach($registros as $dados){
                        echo('
                                <tr>
                                    <td>'.$dados[$id].'</td>
                                    <td>'.$dados[$name].'</td>
                                    <td>'.$dados[$email].'</td>
                                    <td>'.$dados[$oportunity].'</td>
                                    <td>'.$dados[$day].'</td>
                                    <td>'.$dados[$hour].'</td>
                                </tr>                               
                        ');
                        $i++;
                    };
                    if($i === 0){
                        echo('
                        <div class="bad-contact">
                            <p>There are no contacts in the system!</p>
                        </div>
                        ');
                    }
                    else{
                        echo('
                        <div class="happy-contact">
                            <p>Total Contacts: '.$i.'</p>
                        </div>
                        ');
                    };
                    ?>
                </tbody>
        </table>
    </div>
</body>
</html>