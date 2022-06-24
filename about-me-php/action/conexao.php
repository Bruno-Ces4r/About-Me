<?php 

    function conecta(){
        $host='';
        $user='';
        $password='';
        $database='';
        $link = mysqli_connect($host, $user, $password, $database);
        return $link;
    };

    $link = conecta();

    if(!$link){
        echo("Erro na conexão com o banco de dados!");
    }
    else{
        echo("Conexão realizada com sucesso");
    };

    mysqli_close($link);

?>