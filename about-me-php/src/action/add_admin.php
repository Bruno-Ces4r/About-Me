<?php 

    date_default_timezone_set('America/Sao_Paulo');
    session_start();
    require_once("./conexao.php");
    $db = conecta();

    if(isset($_POST['matricula']) && isset($_POST['password']) && isset($_POST['nome']) && isset($_POST['email'])){
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $matricula = $_POST['matricula'];
        $password = $_POST['password'];
        $dia_inclusao = date("Y-m-d H:i:s");
        $user_add = $_SESSION['matricula'];
        $validacao = 1;
    }

    $sql = "INSERT INTO tb_admin(nome,email,matricula,senha,dia_inclusao,username_inclusao,validacao) values('$nome','$email','$matricula','$password','$dia_inclusao','$user_add', '$validacao')";
    
    $query = $db->query( $sql );
    if($query == false){
        die("Erro ao Carregar");
    }

    header('Location: '.$_SERVER['HTTP_REFERER']);

?>