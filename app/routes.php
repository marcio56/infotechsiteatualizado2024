<?php

require __DIR__ . '/Connection.php';
require __DIR__ . '/Models/Course.php';
require __DIR__ . '/Models/Student.php';
require __DIR__ . '/Models/User.php';

require __DIR__ . '/Controllers/CourseController.php';
require __DIR__ . '/Controllers/StudentController.php';
require __DIR__ . '/Controllers/AuthController.php';

$action = $selected_action ?? $_POST["action"] ?? '';

$baseURL = 'http://localhost:8000';

if (empty($action)) {
    header("Location: $baseURL");
    exit;
}


if ($action == 'create-course') {
    $name = $_POST["name"];
    $description = $_POST["description"];

    if (empty($name) || empty($description)) {
        header("Location: $baseURL/create-course.php?error=empty-fields");
        exit;
    }

    $courseController = new CourseController();

    if ($courseController->save($name, $description)) {
        header("Location: $baseURL/app/views/dashboard.php");
    } else {
        header("Location: $baseURL/create.php?error=create-error");
    }
} elseif ($action == 'create-student') {
    $name = $_POST["name"];
    $cpf = $_POST["cpf"];
    $birthdate = $_POST["birthdate"];
    $birthplace = $_POST["birthplace"];
    $nationality = $_POST["nationality"];
    $email = $_POST["email"];

    if (empty($name) || empty($cpf) || empty($birthplace) || empty($birthdate) || empty($nationality) || empty($email)) {
        header("Location: $baseURL/create-student.php?error=empty-fields");
        exit;
    }

    $studentController = new StudentController();

    if ($studentController->save($name, $cpf, $birthdate, $birthplace, $nationality, $email)) {
        header("Location: $baseURL/app/views/dashboard.php");
    } else {
        header("Location: $baseURL/create-student.php?error=create-error");
    }
} elseif ($action == 'list-all') {
    $studentController = new StudentController();
    $courseController = new CourseController();

    $courses = $courseController->getAll();
    $students = $studentController->getAll();
} elseif ($action == 'delete-course') {
    $courseController = new CourseController();
    $course = $courseController->delete($_POST['id']);

    header("Location: $baseURL");
} elseif ($action == 'delete-student') {
    $studentController = new StudentController();
    $student = $studentController->delete($_POST['id']);

    header("Location: $baseURL/app/views/dashboard.php");
} elseif ($action == 'delete-student') {
    $studentController = new StudentController();
    $student = $studentController->delete($_POST['id']);

    header("Location: $baseURL/app/views/dashboard.php");
} elseif ($action == 'show-course') {
    $courseController = new CourseController();
    $course = $courseController->show($_GET['id']);
} elseif ($action == 'show-student') {
    $studentController = new StudentController();
    
    $student = $studentController->show($_GET['id']);
} elseif ($action == 'update-course') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $courseController = new CourseController();
    $course = $courseController->update($id, $name, $description);

    header("Location: $baseURL/app/views/dashboard.php");
} elseif ($action == 'update-student') {
    $id = $_POST['id'];
    $name = $_POST["name"];
    $cpf = $_POST["cpf"];
    $birthdate = $_POST["birthdate"];
    $birthplace = $_POST["birthplace"];
    $nationality = $_POST["nationality"];
    $email = $_POST["email"];

    $studentController = new StudentController();
    $student = $studentController->update($id, $name, $cpf, $birthdate, $birthplace, $nationality, $email);

    header("Location: $baseURL/app/views/dashboard.php");
} elseif ($action == 'register') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($name) || empty($email) || empty($password)) {
        header("Location: $baseURL/app/views/auth/register.php?error=empty-fields");
        exit;
    }

    $authController = new AuthController();

    if ($authController->save($name, $email, $password)) {
        header("Location: $baseURL");
    } else {
        header("Location: $baseURL/create.php?error=create-error");
    }
} elseif ($action == 'login') {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        header("Location: $baseURL/app/views/auth/login.php?error=empty-fields");
        exit;
    }

    $authController = new AuthController();
    $login = $authController->login($email, $password);

    if (!$login) {
        header("Location: $baseURL/app/views/auth/login.php?error=login");
    } else {
        session_start();
        $_SESSION["user"] = $login;
        header("Location: $baseURL/app/views/dashboard.php");
    }
} elseif ($action == 'logout') {
    session_start(); 
    session_destroy();

    header("Location: $baseURL/app/views/auth/login.php");
}
