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

    
    <section class="index-content">
        <div class="card-content">
            <div class="info-content">
                <h1>Conheça sobre minha História Profissional.</h1>
                <hr style="margin-left:10px; margin-right:10px;">
                <h3 style="margin-left:15px;">
                    Experiências mais relevantes:
                </h3>
                <ul class="empregos">
                    <li>
                        Banco do Brasil Seguros
                    </li>
                    <li>
                        Monitor de Projeto Social (Uniceub)
                    </li>
                    <li>
                        Wise Up Online
                    </li>
                </ul>
                <hr style="margin-left:10px; margin-right:10px;">
                <p>&nbsp;&nbsp;Clique no botão abaixo para apreciar um resumo sobre minha história.</p>
                <a href="./history.php"><button type='button' class="btn btn-success button">História</button></a>
            </div>
        </div>
        <div>
            <img src="./image/history.webp" alt="history" class="img-history">
        </div>
    </section>

    <!-- <header>
        <h1 class="h1-header">Conheça um pouco sobre minha história pessoal e profissional.</h1>
    </header> -->

    <!--Interessante Colocar um modo Escuro,caso o usuário queira usar, é possível fazer isso com JavaScript-->
</body>
</html>