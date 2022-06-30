<?php 
    require_once('./conexao.php');
    $db = conecta();

    if(isset($_POST['username']) && isset($_POST['senha'])){
        $username = $_POST['username'];
        $senha = $_POST['senha'];
    }

    $sql = 'SELECT * FROM bruno.tb_admin where username = "'.$username.'" and senha = "'.$senha.'";';
    $query = $db->query( $sql );
    $registros = $query->fetchall();
    if($registros[0] > 0){
        echo("Pode Logar");
        #Vou jogar pra página pós login com a SESSION
    }
    else{
        #Vou Retornar um erro pra ele e deixar ele na mesma página
        echo("Não pode logar");
    }

?>