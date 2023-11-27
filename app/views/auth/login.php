<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Registrar</title>

    <link href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
</head>

<body class="bg-light">
    <main class="container vh-100 d-flex align-items-center">
        <div class="col-6 mx-auto mt-5">
        <form method="POST" action="../../routes.php" class="card p-5">
            <h1 class="h3 mb-3 fw-bold">Acessar conta</h1>
            <div class="form-floating mt-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mt-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>
            <input type="hidden" name="action" value="login">
            <button class="w-100 btn btn-lg btn-primary mt-3 fw-bold" type="submit">Acessar</button>
            <a class="mt-3" href="register.php">Criar conta</a>
            <p class="mt-5 mb-3 text-center">&copy; Todos os direitos reservados a InfoTech - 2023</p>
        </form>
        </div>
    </main>
</body>

</html> 