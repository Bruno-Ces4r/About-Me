<?php 
    session_start();
    require_once('./conexao.php');
    $db = conecta();

    if(isset($_POST['matricula']) && isset($_POST['senha'])){
        $matricula = $_POST['matricula'];
        $senha = $_POST['senha'];
    }

    $sql = 'SELECT * FROM tb_admin where matricula = "'.$matricula.'" AND senha = "'.$senha.'";';
    $query = $db->query( $sql );
    $count = $query->rowcount(); // Contagem de linhas que minha query trouxe

    $registros = $query->fetchall(); // Joguei os elementos em um ARRAY
    $matricula = 3;
    $senha = 4;

    if($count === 1){
        $_SESSION['matricula'] = $registros[0][$matricula]; // Capturo o usuário aqui
        $_SESSION['senha'] = $registros[0][$senha]; // Capturo a senha aqui
        header("Location:./../views/home.php");
        #Vou jogar pra página pós login com a SESSION
    }
    else{
        #Vou Retornar um erro pra ele e deixar ele na mesma página
        header("Location:./../login/login.php");
    }
?>