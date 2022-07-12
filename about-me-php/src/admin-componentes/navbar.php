<?php 
session_start();
?>


<nav class="navegacao">
    <div class="portfolio">
        <a href=""><img src="./../../image/logo-wolf-white.png" alt="logo" class="img-logo"></a> <!--Criar uma logo minha-->
        <a href="./home.php">BC Developer</a>
    </div>

    <div class="navega">
        <a href="./home.php">Contacts</a>
        <a href="./admins.php">Admins</a>
        <a href="./painel.php">Painel de Controle</a>

        
        <div class="dropdown">
        <button class="dropbtn"><?php echo($_SESSION['matricula']); ?></button>
            <div class="dropdown-content">
                <a href="#">Editar Perfil</a>
                <a href="#">Sair</a>
            </div>
        </div>

    </div>
</nav>