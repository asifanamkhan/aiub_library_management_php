<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Profile</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<?php
include "../../view/employee/menu.php";
// include "../../view/dashboard.php";
session_start();
require_once('../../model/teacherModel.php');
$id = $_COOKIE['loggedInId'];
$teacher = getTeachersById($id);
?>

<div class="container">
    <div style="display: inline-block">
        <div>
            <form action="../../controller/teacher.php" method="post">
                <input type="hidden" name="edit_profile">
                <button type="submit" class="btn-info">Edit Profile</button>
            </form>
        </div>

        <div>
            <form action="../../controller/teacher.php" method="post">
                <input type="hidden" name="change_password">
                <button type="submit" class="btn-info">Change Password</button>
            </form>
        </div>
    </div>
    <div class="field-area">
        <table class="table">
            <tbody >
            <tr>
                <th>User Name:</th>
                <td><?php print_r($teacher['name']) ?></td>
            </tr>

            <tr>
                <th> Id :</th>
                <td><?php print_r($teacher['teacher_id']) ?></td>
            </tr>

            <tr>
                <th>First Name:</th>
                <td><?php print_r($teacher['first_name']) ?></td>
            </tr>

            <tr>
                <th>Last Name:</th>
                <td><?php print_r($teacher['last_name']) ?></td>
            </tr>

            <tr>
                <th>Email:</th>
                <td><?php print_r($teacher['email']) ?></td>
            </tr>

            <tr>
                <th>Phone number:</th>
                <td><?php print_r($teacher['phone_number']) ?></td>
            </tr>

            <tr>
                <th>Department:</th>
                <td><?php print_r($teacher['department']) ?></td>
            </tr>

            <tr>
                <th>Gender:</th>
                <td><?php print_r($teacher['gender']) ?></td>
            </tr>

            <tr>
                <th>Date of birth:</th>
                <td><?php print_r($teacher['date_of_birth']) ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
