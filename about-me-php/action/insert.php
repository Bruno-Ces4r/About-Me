<?php

    require_once('./conexao.php');
    $db = conecta();
     if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['oportunidade'])){
        $nome = $_POST['nome'];
        $nome_verificado = str_replace("'", '"', $nome);

        $email = $_POST['email'];
        $email_verificado = str_replace("'", '"', $email);

        $oportunidade = $_POST['oportunidade'];
        $oportunidade_verificado = str_replace("'", '"', $oportunidade);
     }
        $sql = "INSERT INTO tb_contact(nome,email,oportunidade) values('$nome_verificado', '$email_verificado', '$oportunidade_verificado')";
        $query = $db->query( $sql );
        if($query == false){
            die("Erro ao caregar");
        }
    header('Location: '.$_SERVER['HTTP_REFERER']);

?>