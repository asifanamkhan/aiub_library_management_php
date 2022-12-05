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
<div align="center">
    <a href="../dashboard.php">Dashboard |</a>
    <a href="../profile/show.php">Profile |</a>
    <a href="../book/list.php">Books |</a>
    <a href="../../controller/logout.php"> Log Out</a>
</div>

<?php
session_start();
require_once('../../model/teacherModel.php');
$id = $_COOKIE['loggedInId'];
$teacher = getTeachersById($id);
?>

<br><br><br>

<div align="center">
    <form action="../../controller/teacher.php" method="post">
        <input type="hidden" name="edit_profile">
        <button type="submit">Edit Profile</button>
    </form>
    <form action="../../controller/teacher.php" method="post">
        <input type="hidden" name="change_password">
        <button type="submit">Change Password</button>
    </form>
</div>
<div class="container">
    <table align="center" border="1">
        <tbody align="center">
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
</body>
</html>