<?php
session_start();

include('../model/db.php');
require_once('../model/teacherModel.php');

if (isset($_POST['submit'])) {

    $user_name = $_POST['user_name'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $id = $_POST['user_id'];

    $gender = $_POST['gender'];

    $con = getConnection();

    $sql = "UPDATE teachers SET name='$user_name', email='$email', gender='$gender', password='$password' WHERE id='$id'";

    $result = $con->query($sql);

    if ($result == TRUE) {

        echo "";
        $_SESSION["signup_success"] = "Password change successfully";

    }else{
        echo "Error:". $sql . "<br>". $con->error;
    }

    $con->close();

    // Redirect user to welcome page
    header("location: ../view/profile/show.php");


}
?>