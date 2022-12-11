<?php
require_once('../model/libraryModel.php');

function library_create()
{
    $library_create_error = [];

    if (!$_POST['library_id']) {
        $library_create_error['library_id'] = 'Please enter librarian id';
    }
    if (!$_POST['name']) {
        $library_create_error['name'] = 'Please enter name';
    }
    if (!$_POST['department']) {
        $library_create_error['department'] = 'Please enter department';
    }

    if ($library_create_error) {
        $_SESSION["library_create_error"] = $library_create_error;
        header("location: ../view/library/create.php");

    } else {
        $library['name'] = $_POST['name'];
        $library['library_id'] = $_POST['library_id'];
        $library['department'] = $_POST['department'];
        $result = lib_create($library);

        if ($result == TRUE) {
            $_SESSION["library_create_success"] = "New librarian created successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/library/list.php");
    }

}

function library_edit()
{
    unset($_SESSION['library_edit_error']);
    unset($_SESSION['library_edit_success']);

    $library_edit_error = [];
    if (!$_POST['library_id']) {
        $library_edit_error['library_id'] = 'Please enter librarian id';
    }
    if (!$_POST['name']) {
        $library_edit_error['name'] = 'Please enter name';
    }
    if (!$_POST['department']) {
        $library_edit_error['department'] = 'Please enter department';
    }

    if ($library_edit_error) {
        $_SESSION["library_edit_error"] = $library_edit_error;
        header("location: ../view/library/edit.php");

    } else {
        $library['name'] = $_POST['name'];
        $library['library_id'] = $_POST['library_id'];
        $library['department'] = $_POST['department'];
        $library['id'] = $_POST['lib_id']; ////////////
        $result = lib_edit($library);

        if ($result == TRUE) {
            $_SESSION["library_edit_success"] = "librarian updated successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/library/list.php");
    }

}

function library_delete($id)
{
    $result = lib_delete($id);

    if ($result == TRUE) {
        $_SESSION["library_delete_success"] = "librarian deleted successfully";
    } else {
        echo "Something went wrong";
    }

    header("location: ../view/library/list.php");
}

?>
