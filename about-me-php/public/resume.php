<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/resume.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="../favicon_io/favicon.ico" type="image/x-icon">
    <title>Resume</title>
</head>
<body class="corpo">
    <?php include_once("./componentes/navbar.php") ?>
    
    <section class="my-photo">
        <div class="shadow">
            <div class="circle">
                <img src="./../image/foto-bruno.jpg" alt="oi" class="perfil-photo">
            </div>
        </div>
    </section>

    <section>
        <h1 class="information" style="font-size:2.2em;">Bruno César Camargo dos Reis</h1>
    
        <p class="information">Intern in the Technology team at BB Seguros | Full Stack Developer | JavaScript | PHP | Sql | Python | HTML5 | CSS3 </p>
    </section>
    


    <section class="experiences">
        
        <h2>Most relevant experiences:</h2>
        <ul class="empregos">
            <li>
                Banco do Brasil Seguros:
                <br>
                <b>17/01/2022 - Current</b>
                <br>
                <b>trainee of technology</b>
            </li>
            <li>
                Uniceub - Project Social Monitor
            </li>
        </ul>
        <a href="./history.php"><button type='button' class="btn btn-success">Learn More</button></a>
    </section>
    


    <section>
        <h2>Competencias</h2>
        <p>Inteligência Emocional</p>
        <p>Desenvolvimento Web(Java Script, Html, Css, Bootstrap)</p>
        <p>Backend(Python, Node.js)</p>
        <p>Marketing Digital</p>
        <p>Power BI (Aperfeiçoamento em adamento)</p>
    </section> 
    


    <footer class="development-by">
        Development by BC Developer
        <a href="https://www.instagram.com/bruno.cesar1/" target="__blank"><img src="../image/instagram.png" alt="" title="Instagram" class="img-contact"></a>

        <a href="https://www.linkedin.com/in/bruno-c%C3%A9sar-659045206/" target="__blank"><img src="../image/linkedin.png" alt="" title="Linkedin" class="img-contact"></a>

        <a href="mailto:bruno.reis.profissional@gmail.com" target="__blank"><img src="../image/email.png" alt="" title="E-mail" class="img-contact"></a>

        <a href="https://github.com/Bruno-Ces4r" target="__blank"><img src="../image/github.png" alt="" title="GitHub" class="img-contact"></a>
    </footer>
</body>
</html>