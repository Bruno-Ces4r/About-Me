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

            <p class="box-contact"><a href=""><img src="./image/linkedin.png" alt="" title="Linkedin" class="contact-page">Linkedin aqui</a></p>
            <p class="box-contact"> <a href=""><img src="./image/email.png" alt="" title="E-mail" class="contact-page">E-mail aqui</a></p>
            <p class="box-contact"><a href=""><img src="./image/github.png" alt="" title="GitHub" class="contact-page">GitHub aqui</a></p>
            <p class="box-contact"><a href=""><img src="./image/instagram.png" alt="" title="Instagram" class="contact-page">Instagram aqui</a></p>
        </section>

        <section class="controle-contact">
            <h2>Send me a message 🚀</h2>
            <form action="" method="post">
                <div class="controle-form">
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tell me more about the project:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your idea"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
            
        </section>


        </section>
        <footer class="development-by">
        Development by BC Developer
        <a href=""><img src="./image/instagram.png" alt="" title="Instagram" class="img-contact"></a>
        <a href=""><img src="./image/linkedin.png" alt="" title="Linkedin" class="img-contact"></a>
        <a href=""><img src="./image/email.png" alt="" title="E-mail" class="img-contact"></a>
        <a href=""><img src="./image/github.png" alt="" title="GitHub" class="img-contact"></a>
    </footer>
</body>
</html>