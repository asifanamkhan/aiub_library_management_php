<?php
require_once('../model/employeeModel.php');

function employee_create()
{
    $employee_create_error = [];

    if (!$_POST['employee_id']) {
        $employee_create_error['employee_id'] = 'Please enter employee id';
    }
    if (!$_POST['name']) {
        $employee_create_error['name'] = 'Please enter name';
    }
    if (!$_POST['department']) {
        $employee_create_error['department'] = 'Please enter department';
    }

    if ($employee_create_error) {
        $_SESSION["employee_create_error"] = $employee_create_error;
        header("location: ../view/employee/create.php");

    } else {
        $employee['name'] = $_POST['name'];
        $employee['employee_id'] = $_POST['employee_id'];
        $employee['department'] = $_POST['department'];
        $result = emp_create($employee);

        if ($result == TRUE) {
            $_SESSION["employee_create_success"] = "New employee created successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/employee/list.php");
    }

}

function employee_edit()
{
    unset($_SESSION['employee_edit_error']);
    unset($_SESSION['employee_edit_success']);

    $employee_edit_error = [];
    if (!$_POST['employee_id']) {
        $employee_edit_error['employee_id'] = 'Please enter employee id';
    }
    if (!$_POST['name']) {
        $employee_edit_error['name'] = 'Please enter name';
    }
    if (!$_POST['department']) {
        $employee_edit_error['department'] = 'Please enter department';
    }

    if ($employee_edit_error) {
        $_SESSION["employee_edit_error"] = $employee_edit_error;
        header("location: ../view/employee/edit.php");

    } else {
        $employee['name'] = $_POST['name'];
        $employee['employee_id'] = $_POST['employee_id'];
        $employee['department'] = $_POST['department'];
        $employee['id'] = $_POST['emp_id'];
        $result = emp_edit($employee);

        if ($result == TRUE) {
            $_SESSION["employee_edit_success"] = "employee updated successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/employee/list.php");
    }

}

function employee_delete($id)
{
    $result = emp_delete($id);

    if ($result == TRUE) {
        $_SESSION["employee_delete_success"] = "employee deleted successfully";
    } else {
        echo "Something went wrong";
    }

    header("location: ../view/employee/list.php");
}

?>