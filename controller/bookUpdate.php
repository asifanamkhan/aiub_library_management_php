<?php
session_start();

include('../model/db.php');
require_once('../model/bookModel.php');

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $book_id = $_POST['book_id'];

    $con = getConnection();

    $sql = "UPDATE books SET name='$name' WHERE id='$book_id'";


    $result = $con->query($sql);

    if ($result == TRUE) {

        echo "";
        $_SESSION["signup_success"] = "Record updated successfully";

    }else{
        echo "Error:". $sql . "<br>". $con->error;
    }

    $con->close();

    // Redirect user to welcome page
    header("location: ../view/book/list.php");


}
?>