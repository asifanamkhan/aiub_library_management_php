<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit student</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<div align="center">
    <a href="../dashboard.php">Dashboard</a> |
    <a href="../profile/show.php">Go to Profile</a> |
    <a href="../student/list.php">employees</a> |
    <a href="../student/list.php">employees</a> |
    <a href="../../controller/logout.php"> Log Out</a>
</div>
<?php
session_start();
require_once('../../model/studentModel.php');
if(isset($_GET['student_id'])){
    $id = $_GET['student_id'];
    $student = getStudentById($id);
}

?>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset>
            <legend>Edit student</legend>
            <table align="center">
                <tr>
                    <td>student Id:</td>
                    <td>
                        <input type="hidden" name="stu_id" value="<?php echo $student['id']; ?>">
                        <input type="text" id="student_id" class="form-control" name="student_id" value="<?php if (isset($student['student_id'])){echo $student['student_id'];}  ?>" >
                        <?php
                        if (isset($_SESSION['student_edit_error']['student_id'])) {
                            echo '<p class="error-message">' . $_SESSION['student_edit_error']['student_id'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>student Name:</td>
                    <td>
                        <input type="text" id="name" class="form-control" name="name" value="<?php if (isset($student['name'])){echo $student['name'];}  ?>">
                        <?php
                        if (isset($_SESSION['student_edit_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['student_edit_error']['name'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td>
                        <input type="text" id="department" class="form-control" name="department" value="<?php if (isset($student['department'])){echo $student['department'];}  ?>">
                        <?php
                        if (isset($_SESSION['student_edit_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['student_edit_error']['department'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="student_edit_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>