<?php 
    session_start();
    require_once('./conexao.php');
    $db = conecta();

    if(isset($_POST['username']) && isset($_POST['senha'])){
        $username = $_POST['username'];
        $senha = $_POST['senha'];
    }

    $sql = 'SELECT * FROM bruno.tb_admin where username = "'.$username.'" AND senha = "'.$senha.'";';
    $query = $db->query( $sql );
    $count = $query->rowcount(); // Contagem de linhas que minha query trouxe

    $registros = $query->fetchall(); // Joguei os elementos em um ARRAY

    if($count === 1){
        $_SESSION['username'] = $registros[0][0]; // Capturo o usuário aqui
        $_SESSION['senha'] = $registros[0][1]; // Capturo a senha aqui
        header("Location:./../views/home.php");
        #Vou jogar pra página pós login com a SESSION
    }
    else{
        #Vou Retornar um erro pra ele e deixar ele na mesma página
        header("Location:./../login/login.php");
    }

?>