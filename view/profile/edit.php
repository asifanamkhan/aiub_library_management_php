<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
</head>
<body>
    <?php
        require_once('../../model/teacherModel.php');
        $id = $_COOKIE['loggedInId'];
        $teacher = getTeachersById($id);
    ?>
    <br><br><br><br>
    <form method="post" action="../../controller/teacherUpdate.php">
        <fieldset >
            <legend id="10">Edit Profile</legend>
            <table>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input value="<?php print_r($teacher['name']); ?>" type="text" id="user_name" name="user_name" placeholder="Enter User Name">
                        <input value="<?php print_r($teacher['id']); ?>" type="hidden" id="" name="user_id">
                    </td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td><input value="<?php print_r($teacher['email']); ?>" type="email" id="email" name="email" placeholder="Enter Email"></td>
                </tr>

                <tr>
                    <td>Gender </td>
                    <td>
                        <input type="radio" <?php  echo ($teacher['gender'] == 'Male') ? "checked": ""  ?>  id="gender_male" name="gender" value="Male">male
                        <input type="radio" <?php  echo ($teacher['gender'] == 'Female') ? "checked": ""  ?>  id="gender_female" name="gender" value="Female">Female
                        <input type="radio" <?php  echo ($teacher['gender'] == 'Others') ? "checked": ""  ?> id="gender_other" name="gender" value="Others">Others
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>

            </table>

        </fieldset>

    </form>
</body>
</html>