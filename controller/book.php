<?php
require_once('../model/bookModel.php');

function book_create()
{
    $book_create_error = [];

    if (!$_POST['name']) {
        $book_create_error['name'] = 'Please enter name';
    }
    if (!$_POST['book_id']) {
        $book_create_error['book_id'] = 'Please enter book id';
    }

    if ($book_create_error) {
        $_SESSION["book_create_error"] = $book_create_error;
        header("location: ../view/book/create.php");

    } else {
        $book['name'] = $_POST['name'];
        $book['book_id'] = $_POST['book_id'];
        $result = create($book);

        if ($result == TRUE) {
            $_SESSION["book_create_success"] = "New book created successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/book/list.php");
    }

}

function book_edit()
{
    unset($_SESSION['book_edit_error']);
    unset($_SESSION['book_edit_success']);
    $book_edit_error = [];
    if (!$_POST['name']) {
        $book_edit_error['name'] = 'Please enter name';
    }
    if (!$_POST['book_id']) {
        $book_edit_error['book_id'] = 'Please enter book id';
    }

    if ($book_edit_error) {
        $_SESSION["book_edit_error"] = $book_edit_error;
        header("location: ../view/book/edit.php");

    } else {
        $book['name'] = $_POST['name'];
        $book['book_id'] = $_POST['book_id'];
        $book['id'] = $_POST['b_id'];
        $result = edit($book);

        if ($result == TRUE) {
            $_SESSION["book_edit_success"] = "Book updated successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/book/list.php");
    }

}

function book_delete($id)
{
    $result = delete($id);

    if ($result == TRUE) {
        $_SESSION["book_delete_success"] = "Book deleted successfully";
    } else {
        echo "Something went wrong";
    }

    header("location: ../view/book/list.php");
}

?>