<?php

session_start();

if (!$_SESSION['user']) {
    header("Location: $baseURL/app/views/auth/login.php?error=login");
}
$selected_action = 'show-course';
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
    <title>Ver curso</title>

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
                    <label for="name" class="form-label">Nome do curso</label>
                    <input type="text" value="<?= $course['name'] ?>" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-6">
                    <label for="description" class="form-label">Descrição</label>
                    <input type="text" value="<?= $course['description'] ?>" name="description" class="form-control" id="description">
                </div>
                <input type="hidden" name="action" value='update-course'>
                <input type="hidden" name="id" value="<?= $course['id'] ?>">
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Atualizar curso7</button>
                </div>
            </form>

        </div>
    </main>
</body>

</html>