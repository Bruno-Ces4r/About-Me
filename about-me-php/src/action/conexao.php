<?php
    function conecta(){
        $host = 'localhost:3306';
        $user = 'root';
        $password = 'Deckcity147';
        $database = 'about_me';
        $link = new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user,$password);
        return $link;
    };
?>