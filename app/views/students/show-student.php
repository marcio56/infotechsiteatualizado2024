<?php

session_start();

if (!$_SESSION['user']) {
    header("Location: $baseURL/app/views/auth/login.php?error=login");
}

$selected_action = 'show-student';
require_once '../../routes.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Ver aluno</title>

    <link href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
</head>


<body class="bg-light">
    <main class="container-fluid p-0">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-3 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 fw-bold" href="#">InfoTech</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3 fw-bold" href="#">Sair da conta</a>
                </div>
            </div>
        </header>
        <div class="mx-auto col-10">
            <form class="row my-3" method="POST" action="../../routes.php">
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Nome do aluno</label>
                    <input type="text" value="<?= $student['name'] ?>" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-6">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" value="<?= $student['cpf'] ?>" name="cpf" class="form-control" id="cpf">
                </div>
                <div class="mb-3 col-6">
                    <label for="birthdate" class="form-label">Data de nascimento</label>
                    <input type="date" value="<?= $student['birthdate'] ?>" name="birthdate" class="form-control" id="birthdate">
                </div>
                <div class="mb-3 col-6">
                    <label for="birthplace" class="form-label">Naturalidade</label>
                    <input type="text" value="<?= $student['birthplace'] ?>" name="birthplace" class="form-control" id="birthplace">
                </div>
                <div class="mb-3 col-6">
                    <label for="nationality" class="form-label">Nacionalidade</label>
                    <input type="text" value="<?= $student['nationality'] ?>" name="nationality" class="form-control" id="nationality">
                </div>
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="<?= $student['email'] ?>" name="email" class="form-control" id="email">
                </div>
                <input type="hidden" name="action" value='update-student'>
                <input type="hidden" name="id" value="<?= $student['id'] ?>">
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Atualizar aluno</button>
                </div>
            </form>

        </div>
    </main>
</body>


</html>