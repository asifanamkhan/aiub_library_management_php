<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit employee</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<div align="center">
    <a href="../dashboard.php">Dashboard</a> |
    <a href="../profile/show.php">Go to Profile</a> |
    <a href="../employee/list.php">employees</a> |
    <a href="../employee/list.php">employees</a> |
    <a href="../../controller/logout.php"> Log Out</a>
</div>
<?php
session_start();
require_once('../../model/employeeModel.php');
if(isset($_GET['employee_id'])){
    $id = $_GET['employee_id'];
    $employee = getEmployeeById($id);
}

?>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset>
            <legend>Edit employee</legend>
            <table align="center">
                <tr>
                    <td>employee Id:</td>
                    <td>
                        <input type="hidden" name="emp_id" value="<?php echo $employee['id']; ?>">
                        <input type="text" id="employee_id" class="form-control" name="employee_id" value="<?php if (isset($employee['emp_id'])){echo $employee['emp_id'];}  ?>" >
                        <?php
                        if (isset($_SESSION['employee_edit_error']['employee_id'])) {
                            echo '<p class="error-message">' . $_SESSION['employee_edit_error']['employee_id'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>employee Name:</td>
                    <td>
                        <input type="text" id="name" class="form-control" name="name" value="<?php if (isset($employee['name'])){echo $employee['name'];}  ?>">
                        <?php
                        if (isset($_SESSION['employee_edit_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['employee_edit_error']['name'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td>
                        <input type="text" id="department" class="form-control" name="department" value="<?php if (isset($employee['department'])){echo $employee['department'];}  ?>">
                        <?php
                        if (isset($_SESSION['employee_edit_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['employee_edit_error']['department'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="employee_edit_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>