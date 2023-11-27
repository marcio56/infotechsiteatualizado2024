<?php

session_start();

if (!$_SESSION['user']) {
    header("Location: $baseURL/app/views/auth/login.php?error=login");
}

$selected_action = 'list-all';
require_once '../routes.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard</title>

    <link href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
</head>

<body class="bg-light">
    <main class="container-fluid p-0">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-3 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 fw-bold" href="/index.php">InfoTech</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <form id="logout" method="POST" action="../routes.php">
                        <input type="hidden" name="action" value="logout">
                    </form>
                    <a href="#" class="nav-link px-3 fw-bold" onclick="document.getElementById('logout').submit()">Sair da conta</a>
                </div>
            </div>
        </header>

        <div class="container-fluid bg-white">
            <div class="row">
                <main class="col-10 mx-auto ms-sm-auto px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="fw-bold">Visão Geral</h1>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <h4 class="fw-bold">Aluno cadastrado</h4>
                        </div>
                        <div class="col text-end">
                            <a class="btn btn-success" href="../views/students/create-student.php">
                                Adicionar nova inscrição
                            </a>
                        </div>
                    </div>

                    <hr>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Data de matricula</th>
                                    <th class="text-center" scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $key => $student) { ?>
                                    <tr>
                                        <td><?= $student['id'] ?></td>
                                        <td><?= $student['name'] ?></td>
                                        <td><?= $student['cpf'] ?></td>
                                        <td><?= $student['email'] ?></td>
                                        <td><?= $student['initial_enrollment_date'] ?></td>
                                        <td class="text-center">
                                            <form id="showStudent<?= $student['id'] ?>" action="../views/students/show-student.php" method="GET">
                                                <input type='hidden' name='id' value="<?= $student['id'] ?>">
                                            </form>
                                            <form id="deleteStudent" action="../routes.php" method="POST">
                                                <input type='hidden' name='id' value="<?= $student['id'] ?>">
                                                <input type='hidden' name='action' value="delete-student">
                                            </form>
                                            <a onclick="document.getElementById('showStudent<?= $student['id'] ?>').submit()" class="btn btn-info">
                                                Editar
                                            </a>
                                            <a onclick="document.getElementById('deleteStudent').submit()" class="btn btn-danger ms-2">
                                                Deletar
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <h4 class="fw-bold">Cursos cadastrados</h4>
                        </div>
                        <div class="col text-end">
                            <a class="btn btn-success" href="../views/courses/create-course.php">
                                Adicionar novo curso
                            </a>
                        </div>
                    </div>

                    <hr>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th class="text-center" scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($courses as $key => $course) { ?>
                                    <tr>
                                        <td><?= $course['id'] ?></td>
                                        <td><?= $course['name'] ?></td>
                                        <td><?= $course['description'] ?></td>
                                        <td class="text-center">
                                            <form id="showCourse<?= $course['id'] ?>" action="../views/courses/show-course.php" method="GET">
                                                <input type='hidden' name='id' value="<?= $course['id'] ?>">
                                            </form>
                                            <form id="deleteCourse" action="../routes.php" method="POST">
                                                <input type='hidden' name='id' value="<?= $course['id'] ?>">
                                                <input type='hidden' name='action' value="delete-course">
                                            </form>
                                            <a onclick="document.getElementById('showCourse<?= $course['id'] ?>').submit()" class="btn btn-info">
                                                Editar
                                            </a>
                                            <a onclick="document.getElementById('deleteCourse').submit()" class="btn btn-danger ms-2">
                                                Deletar
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </main>
            </div>
        </div>

    </main>
</body>

</html>