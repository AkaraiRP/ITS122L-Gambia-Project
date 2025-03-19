<?php
require_once 'database.php';

session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $name=$_POST['name'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
      
    }
    if(empty($name)){
        $errors['name']='Name is required';
    }
    if (strlen($password) < 8 ) {
        $errors['password'] = 'Password must be at least 8 characters long.';
    }

    if ($password !== $confirmPassword) {
        $errors['confirm_password'] = 'Passwords do not match';
    }

    $stmt = $conn -> prepare("SELECT * FROM users WHERE email = :email");
    $stmt -> execute(['email' => $email]);
    if ($stmt->fetch()) {
        $errors['user_exist'] = 'Email is already registered';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: /Dashboard/register.php');
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $conn -> prepare("INSERT INTO users (name, email, password,created_at, is_instructor) VALUES (:name, :email, :password, NOW(), 0)");
    $stmt -> execute(['email' => $email, 'password' => $hashedPassword, 'name'=>$name]);

    header('Location: /Dashboard/login.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    if (empty($password)) {
        $errors['password'] = 'Password cannot be empty';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: /Dashboard/login.php');
        exit();
    }

    $stmt = $conn -> prepare("SELECT * FROM users WHERE email = :email");
    $stmt -> execute(['email' => $email]);
    $user = $stmt -> fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'id' => $user['user_id'],
            'email' => $user['email'],
            'name'=>$user['name'],
            'created_at' => $user['created_at'],
            'contact_number' => $user['contact_number']
        ];

        header('Location: /Dashboard/home.php');
        exit();
    } else {
        $errors['login'] = 'Invalid email or password';
        $_SESSION['errors'] = $errors;
        header('Location: /Dashboard/login.php');
        exit();
    }
}

?>