<?php
session_start();
unset($_SESSION['login_error']);

require_once('../model/teacherModel.php');

if (isset($_GET['login_page'])) {
    unset($_SESSION['login_error']);
    header("location: ../view/auth/login.php");
}


if (isset($_POST['submit'])) {
    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $login_error = [];

    if (!$_POST['user_name']) {
        $login_error['user_name'] = 'Please enter user name';
    }
    if (!$_POST['password']) {
        $login_error['password'] = 'Please enter email';
    }

    if ($login_error) {
        $_SESSION["login_error"] = $login_error;

        header("location: ../view/auth/login.php");
    } else {

        $status = validate($username, $password);

        if ($status['status'] == true) {
            setcookie('loggedInName', $username, time() + 3600, '/');
            setcookie('loggedInPassword', $password, time() + 3600, '/');
            setcookie('loggedInId', $status['data'], time() + 3600, '/');
            header('location: ../view/dashboard.php');

        } else {
            unset($_SESSION['login_error']);
            $_SESSION["login_error"]['credential_error'] = 'Given credentials does not match';
            header('location: ../view/auth/login.php');
        }
    }
}
?>