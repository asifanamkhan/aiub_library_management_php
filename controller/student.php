<?php
require_once('../model/studentModel.php');

function student_create()
{
    $student_create_error = [];

    if (!$_POST['student_id']) {
        $student_create_error['student_id'] = 'Please enter student id';
    }
    if (!$_POST['name']) {
        $student_create_error['name'] = 'Please enter name';
    }
    if (!$_POST['department']) {
        $student_create_error['department'] = 'Please enter department';
    }

    if ($student_create_error) {
        $_SESSION["student_create_error"] = $student_create_error;
        header("location: ../view/student/create.php");

    } else {
        $student['name'] = $_POST['name'];
        $student['student_id'] = $_POST['student_id'];
        $student['department'] = $_POST['department'];
        $result = stu_create($student);

        if ($result == TRUE) {
            $_SESSION["student_create_success"] = "New student created successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/student/list.php");
    }

}

function student_edit()
{
    unset($_SESSION['student_edit_error']);
    unset($_SESSION['student_edit_success']);

    $student_edit_error = [];
    if (!$_POST['student_id']) {
        $student_edit_error['student_id'] = 'Please enter student id';
    }
    if (!$_POST['name']) {
        $student_edit_error['name'] = 'Please enter name';
    }
    if (!$_POST['department']) {
        $student_edit_error['department'] = 'Please enter department';
    }

    if ($student_edit_error) {
        $_SESSION["student_edit_error"] = $student_edit_error;
        header("location: ../view/student/edit.php");

    } else {
        $student['name'] = $_POST['name'];
        $student['student_id'] = $_POST['student_id'];
        $student['department'] = $_POST['department'];
        $student['id'] = $_POST['stu_id'];

        $result = stu_edit($student);

        if ($result == TRUE) {
            $_SESSION["student_edit_success"] = "student updated successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/student/list.php");
    }

}

function student_delete($id)
{
    $result = stu_delete($id);

    if ($result == TRUE) {
        $_SESSION["student_delete_success"] = "student deleted successfully";
    } else {
        echo "Something went wrong";
    }

    header("location: ../view/student/list.php");
}

?>