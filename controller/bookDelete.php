<?php
session_start();
include('../model/db.php');
require_once('../model/bookModel.php');

if (isset($_POST['submit'])) {
    $book_id = $_POST['book_id'];

    $con = getConnection();

    $sql = $sql = "DELETE FROM books WHERE id='$book_id'";

    $result = $con->query($sql);

    $var = "If you want to delete this book press Yes Otherwise No ";
    echo $var;

    if ($result == TRUE) {
        echo "";
        $_SESSION["signup_success"] = "Record deleted successfully";

    }else{
        echo "Error:". $sql . "<br>". $con->error;
    }

    $con->close();

    // Redirect user to welcome page
    header("location: ../view/book/list.php");


}
?>