<?php
    function conecta(){
        oii
        olá
        $host = '';
        $user = '';
        $password = '';
        $database = '';
        $link = new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user,$password);
        return $link;
    };
?>
