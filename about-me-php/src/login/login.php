<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../admin-css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="./../../favicon_io/favicon.ico" type="image/x-icon">
    <title>Admin-Page</title>
</head>
<body class="corpo">
    <section class="main-box">
        <div class="circle-login">
            <p class="circular"><img src="./../../image/account-lock.png" alt="" class="image-login"></p>
        </div>
        <p>Welcome to the Login Page, only admin can login on this page!</p>
        <hr>

        <div class="controle-form">
            <form action="./../action/verificacao.php" method="POST">
                <div class="mb-3">
                    <label for="matricula" class="form-label">Matricula:</label>
                    <input type="text" class="form-control" name="matricula" id="matricula" placeholder="Matricula">
                </div>
    
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </section>

</body>
</html>