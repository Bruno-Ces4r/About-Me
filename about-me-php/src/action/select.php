<?php

    require_once('./conexao.php');
    $db = conecta();
        // Query q fiz
        $sql = "SELECT * from tb_contact";
        // Executa a query
        $query = $db->query( $sql );
        //Registros recebe um array de arrays aqui
        $registros = $query->fetchall();
        echo("Dados Recebidos:<br>");
        $id = 0;
        $nome = 1;
        $email = 2;
        $oportunidade = 3;

        foreach($registros as $teste){
            // Recebo em teste o array e manipulo ele aqui abaixo
            // echo("<br> Id: $teste[0] -- Nome: $teste[1] -- E-mail: $teste[2] -- Oportunidade: $teste[3]. <br>");
            echo("<br> <br> $teste[$id] -- $teste[$nome] -- $teste[$email] -- $teste[$oportunidade]");
        };
?>  