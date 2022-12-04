<?php
session_start();

include('../model/db.php');
require_once('../model/teacherModel.php');

if (isset($_POST['submit'])) {

    $user_name = $_POST['user_name'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];


    $con = getConnection();

    $isExist = isExist($user_name);

    if ($isExist){
        echo "Teacher Already exist";
    }else{
        $sql = "INSERT INTO `teachers`(`name`, `email`, `password`, `gender`) VALUES ('$user_name','$email','$password','$gender')";

        // echo 85;

        $result = $con->query($sql);

        if ($result == TRUE) {

            echo "";
            $_SESSION["signup_success"] = "New record created successfully";

        }else{
            echo "Error:". $sql . "<br>". $con->error;
        }

        $con->close();

        // Redirect user to welcome page
        header("location: ../view/auth/login.php");
    }



}
?>