<?php
session_start();

include('../model/db.php');
require_once('../model/bookModel.php');

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $con = getConnection();

    $sql = "INSERT INTO `books`(`name`) VALUES ('$name')";


    $result = $con->query($sql);

        if ($result == TRUE) {

            echo "";
            $_SESSION["signup_success"] = "New record created successfully";

        }else{
            echo "Error:". $sql . "<br>". $con->error;
        }

        $con->close();

        // Redirect user to welcome page
        header("location: ../view/book/list.php");


}
?>