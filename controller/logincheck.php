<?php
session_start();

require_once('../model/teacherModel.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username != "") {
        if ($password != "") {

            $status = validate($username, $password);
            if ($status['status'] == true) {
                setcookie('loggedInName', $username, time() + 3600, '/');
                setcookie('loggedInPassword', $password, time() + 3600, '/');
                setcookie('loggedInId', $status['data'], time() + 3600, '/');
                header('location: ../view/dashboard.php');
            } else {
                echo "invalid username/password";
            }
        }
    } else {
        echo "Invalid password...";
    }
} else {
    echo "Invalid username...";
}
?>