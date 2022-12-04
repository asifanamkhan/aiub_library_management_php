<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Profile</title>
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
        <a href="edit.php">Edit Profile</a> |
        <a href="change-password.php">Change Password</a>
    </div>
    
    <br><br><br>
    <table align="center" border="1">
        <tbody align="center">
            <tr>
                <th>Name: </th>
                <td><?php print_r($teacher['name']) ?></td>
            </tr>

            <tr>
                <th>Email: </th>
                <td><?php print_r($teacher['email']) ?></td>
            </tr>

            <tr>
                <th>Gender: </th>
                <td><?php print_r($teacher['gender']) ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>