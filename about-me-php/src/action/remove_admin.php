<?php 

    date_default_timezone_set('America/Sao_Paulo');
    session_start();
    require_once("./conexao.php");
    $db = conecta();

    if(isset($_POST['matricula'])){
        
        $matricula = $_POST['matricula'];
        $dia_exclusao = date("Y-m-d H:i:s");
        $matricula_exclusao = $_SESSION['matricula'];
        $validacao = 0;
    }

    $sql = "UPDATE tb_admin set dia_exclusao = '$dia_exclusao', username_exclusao = '$matricula_exclusao', validacao = '$validacao' WHERE matricula = '$matricula'";

    $query = $db->query( $sql );
    if($query == false){
        die("Erro ao executar");
    }

    header('Location: '.$_SERVER['HTTP_REFERER']);

?>