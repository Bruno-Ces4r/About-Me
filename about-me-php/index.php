<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="./favicon_io/favicon.ico" type="image/x-icon">
    <title>About Me</title>
</head>
<body class="corpo" >
    
    <?php include_once("./componentes/navbar.php"); ?>

    
    <section class="main-content">
        <div class="left-content">
            <div class="info-content">
                <h5>Welcome!</h5>
                <h1>I'm Full Stack Developer Bruno C. Camargo</h1>
                <p>This Website was created with the intencion of publicizing my portfolio, covering my history,curriculum and a way for people to get in touch with me.</p>
                <a href="./history.php"><button type='button' class="btn btn-success button">Learn More</button></a>
                <!-- Arrumar o href dps de criar a página contact  -->
                <a href="#" style="margin-left:0.8em;"><button type='button' class="btn btn-secondary button">Contact</button></a>
            </div>
        </div>
        <div class="right-content">
            <!-- COLOCAR UMA IMAGEM SEM FUNDO AQUI -->
            <img src="./image/foto-bruno.jpg" alt="history" class="img-history">
        </div>
    </section>


    <!-- <header>
        <h1 class="h1-header">Conheça um pouco sobre minha história pessoal e profissional.</h1>
    </header> -->

    <!--Interessante Colocar um modo Escuro,caso o usuário queira usar, é possível fazer isso com JavaScript-->
</body>
</html>