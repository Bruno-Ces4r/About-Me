<?php 
if(!($_SESSION)){
    session_start();
}

if(!($_SESSION['username'])){
    header("location:./../login/login.php");
}

require_once('./../action/conexao.php');
$db = conecta();

$sql = "SELECT id,username,DATE(dia_inclusao),TIME(dia_inclusao),username_inclusao FROM tb_admin WHERE validacao = 1";
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
    <link rel="stylesheet" href="./../admin-css/admins.css">
    <link rel="shortcut icon" href="./../../favicon_io/favicon.ico" type="image/x-icon">
    <title>Admins</title>
</head>
<body class="corpo">
    <?php include_once("./../admin-componentes/navbar.php") ?>
    <h1 class="titulo">Administrators</h1>

    <div class="container">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Creation Day</th>
                        <th scope="col">Creation Hour</th>
                        <th scope="col">Added By</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $id = 0;
                    $user = 1;
                    $day = 2;
                    $hour = 3;
                    $add_by = 4;
                    $i = 0;
                    foreach($registros as $dados){
                        echo('
                                <tr>
                                    <td>'.$dados[$id].'</td>
                                    <td>'.$dados[$user].'</td>
                                    <td>'.$dados[$day].'</td>
                                    <td>'.$dados[$hour].'</td>
                                    <td>'.$dados[$add_by].'</td>
                                </tr>                               
                        ');
                        $i++;
                    };
                    if($i === 0){
                        echo('
                        <div class="bad-admin">
                            <p>There are no admins in the system</p>
                        </div>
                        ');
                    }
                    else{
                        echo('
                        <div class="happy-admin">
                            <p>Total Active Administrators: '.$i.'</p>
                        </div>
                        ');
                    };
                    ?>
                </tbody>
        </table>
    </div>
</body>
</html>