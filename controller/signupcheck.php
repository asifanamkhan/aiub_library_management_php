<?php
session_start();

include('../model/db.php');
require_once('../model/teacherModel.php');

if (isset($_GET['signup_page'])) {
    unset($_SESSION['signup_error']);
    header("location: ../view/auth/signup.php");
}

if (isset($_POST['signup_submit'])) {
    unset($_SESSION['signup_error']);
    signup_submit();
}

function signup_submit()
{
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $teachers_id = $_POST['teachers_id'];
    $department = $_POST['department'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];

    $signup_error = [];

    if (!$_POST['user_name']) {
        $signup_error['user_name'] = 'Please enter user name';
    }
    if (!$_POST['email']) {
        $signup_error['email'] = 'Please enter email';
    }
    if (!$_POST['password']) {
        $signup_error['password'] = 'Please enter password';
    }
    if (!$_POST['department']) {
        $signup_error['department'] = 'Please enter department';
    }
    if (!$_POST['teachers_id']) {
        $signup_error['teachers_id'] = 'Please enter teachers id';
    }

    if ($signup_error) {
        $_SESSION["signup_error"] = $signup_error;
        header("location: ../view/auth/signup.php");
    } else {
        $con = getConnection();

        $isExist = isExist($user_name);

        if ($isExist) {
            echo "Teacher Already exist";
        } else {
            $sql = "INSERT INTO `teachers`(
                       `name`, `email`, `password`, `gender`,`first_name`,
                       `last_name`, `phone_number`, `address`, `date_of_birth`,
                       `teacher_id`,`department`
                       ) 
                VALUES (
                        '$user_name','$email','$password','$gender',
                        '$first_name','$last_name','$phone_number',
                        '$address','$date_of_birth','$department','$teachers_id'
                        )";

            $result = $con->query($sql);

            if ($result == true) {

                echo "";
                $_SESSION["signup_success"] = "New teacher created successfully";

            } else {
                echo "Error:" . $sql . "<br>" . $con->error;
            }

            $con->close();

            // Redirect user to welcome page
            header("location: ../view/auth/login.php");
        }

    }
}

?>