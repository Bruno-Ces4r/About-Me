<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="../favicon_io/favicon.ico" type="image/x-icon">
    <title>Contact</title>
</head>
<body class="corpo">
    <?php  include_once("./componentes/navbar.php") ?>

    
    <h1 class="boas-vindas">Welcome to the contact page!</h1>
    <section class="main-contact">

        <section class="contact-description">
            <h1>Contact Me, Tell me about projects,ideas or opportunities</h1>
            <p>If you want to talk about a project,idea or some oportunity please get in touch or provide your contact email.</p>
            <p>Let's create something together 🚀🤟</p>

            <p class="box-contact"><img src="../image/linkedin.png" alt="" title="Linkedin" class="contact-page"> <a href="https://www.linkedin.com/in/bruno-c%C3%A9sar-659045206/" target="__blank" class="my-contacts">Bruno César</a> </p>

            <p class="box-contact"><img src="../image/email.png" alt="" title="E-mail" class="contact-page"> <a href="mailto:bruno.reis.profissional@gmail.com" target="__blank" class="my-contacts">bruno.reis.profissional@gmail.com</a></p>

            <p class="box-contact"><img src="../image/github.png" alt="" title="GitHub" class="contact-page"> <a href="https://github.com/Bruno-Ces4r" target="__blank" class="my-contacts">Bruno-Ces4r</a> </p>
            
            <p class="box-contact"><img src="../image/instagram.png" alt="" title="Instagram" class="contact-page"> <a href="https://www.instagram.com/bruno.cesar1/" target="__blank" class="my-contacts">Bruno.cesar1</a> </p>
        </section>

        <section class="controle-contact">
            <h2>Send me a message 🚀</h2>
            
            <div class="controle-form">
                <form action="./../src/action/insert.php" method="POST" class="formulario">
                    
                    <div class="mb-3">
                        <label for="nome" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="oportunidade" class="form-label">Tell me more about the oportunity:</label>
                        <textarea class="form-control"  name="oportunidade" id="oportunidade" rows="3" placeholder="Your idea" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
                <!-- Interessante enviar email agradecendo por entrar em contato, depois q o usuario enviar o formulario(Pesquisar como faz), 
                    Bom criar uma base de dados que vá recebendo quando o email n for válido ou se é válido (Para eu criar o gráfico),-->
            </div>
        </section>

        <?php require_once("./js/valida_contact.php") ?>

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