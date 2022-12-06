<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<div align="center">
    <a href="../dashboard.php">Dashboard</a> |
    <a href="../profile/show.php">Go to Profile</a> |
    <a href="../book/list.php">Books</a> |
    <a href="../../controller/logout.php"> Log Out</a>
</div>

<div align="center">
    <form action="../../controller/teacher.php" method="post">
        <input type="hidden" name="edit_profile">
        <button type="submit">Edit Profile</button>
    </form>
</div>
<?php
session_start();
require_once('../../model/teacherModel.php');
$id = $_COOKIE['loggedInId'];
$teacher = getTeachersById($id);
?>

<div class="container">
    <form method="post" action="../../controller/teacher.php">
        <fieldset>
            <legend id="10">Change Password</legend>
            <?php
            if (isset($_SESSION['password_error'])) {
                echo '<p class="error-message">' . $_SESSION['password_error']['password'] . '</p>';
            }
            if (isset($_SESSION['password_success'])) {
                echo '<p class="error-message">' . $_SESSION['password_success'] . '</p>';
            }
            ?>
            <table>
                <tr>
                    <td>Password:</td>
                    <td>
                        <div>
                            <input class="form-control" type="text" id="password" name="password" placeholder="Enter Password">
                            <input value="<?php echo $teacher['id']; ?>" type="hidden" name="user_id">
                            <?php

                            if (isset($_SESSION['teacher_password_error'])) {
                                echo '<p class="error-message">' . $_SESSION['teacher_password_error'] . '</p>';
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="password_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>