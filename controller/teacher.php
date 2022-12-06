<?php
session_start();

include('../model/db.php');
require_once('../model/teacherModel.php');

if (isset($_POST['edit_profile'])) {
    unset($_SESSION['teacher_edit_error']);
    unset($_SESSION['teacher_edit_success']);
    header("location: ../view/profile/edit.php");
}

if (isset($_POST['change_password'])) {
    unset($_SESSION['password_error']);
    unset($_SESSION['password_success']);
    header("location: ../view/profile/change-password.php");
}

if (isset($_POST['password_submit'])) {
    unset($_SESSION['password_error']);
    unset($_SESSION['password_success']);
   password_change();
}

if (isset($_POST['teacher_edit_submit'])) {
    unset($_SESSION['teacher_edit_error']);
    unset($_SESSION['teacher_edit_success']);
    teacher_edit();
}

function teacher_edit()
{
    $id = $_POST['auth_id'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $teachers_id = $_POST['teachers_id'];
    $department = $_POST['department'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];

    $teacher_edit_error = [];

    if (!$_POST['user_name']) {
        $teacher_edit_error['user_name'] = 'Please enter user name';
    }
    if (!$_POST['email']) {
        $teacher_edit_error['email'] = 'Please enter email';
    }
    if (!$_POST['department']) {
        $teacher_edit_error['department'] = 'Please enter department';
    }
    if (!$_POST['teachers_id']) {
        $teacher_edit_error['teachers_id'] = 'Please enter teachers id';
    }

    if ($teacher_edit_error) {
        $_SESSION["teacher_edit_error"] = $teacher_edit_error;
        header("location: ../view/profile/edit.php");
    } else {
        $con = getConnection();

        $sql = "UPDATE teachers SET 
                    name='$user_name', 
                    email='$email', 
                    gender='$gender' ,
                    first_name='$first_name',
                    last_name='$last_name',
                    address='$address',
                    phone_number='$phone_number',
                    date_of_birth='$date_of_birth',
                    department='$department',
                    teacher_id='$teachers_id'
                    WHERE id='$id'";

        $result = $con->query($sql);

        if ($result == true) {

            $_SESSION["teacher_edit_success"] = "Teacher edit successfully";

        } else {
            echo "Error:" . $sql . "<br>" . $con->error;
        }

        $con->close();

        // Redirect user to welcome page
        header("location: ../view/profile/edit.php");
    }

}

function password_change(){

    $password_error = [];
    if (!$_POST['password']) {
        $password_error['password'] = 'Please enter password';
    }

    if ($password_error) {
        $_SESSION["password_error"] = $password_error;
        header("location: ../view/profile/change-password.php");

    }else{
        $password = $_POST['password'];
        $id = $_POST['user_id'];

        $con = getConnection();
        $sql = "UPDATE teachers SET  password='$password' WHERE id='$id'";

        $result = $con->query($sql);

        if ($result == TRUE) {
            $_SESSION["password_success"] = "Password change successfully";

        }else{
            echo "Error:". $sql . "<br>". $con->error;
        }
        $con->close();

        // Redirect user to welcome page
        header("location: ../view/profile/change-password.php");
    }


}

?>