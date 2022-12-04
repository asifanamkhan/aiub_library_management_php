<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
</head>
<body>
    <?php
        require_once('../../model/teacherModel.php');
        $id = $_COOKIE['loggedInId'];
        $teacher = getTeachersById($id);
    ?>
    <br><br><br><br>
    <form method="post" action="../../controller/teacherPasswordChange.php">
        <fieldset>
            <legend id="10">Change Password</legend>
            <table>
                <input value="<?php print_r($teacher['id']); ?>" type="hidden" id="" name="user_id">
                <input value="<?php print_r($teacher['name']); ?>" type="hidden" id="" name="user_name">
                <input value="<?php print_r($teacher['email']); ?>" type="hidden" id="" name="email">
                <input value="<?php print_r($teacher['gender']); ?>" type="hidden" id="" name="gender">
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password" placeholder="Enter Password"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>