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
<a href="../dashboard.php" id="a1">Dashboard</a>
    <a href="../profile/show.php" id="a1">Profile</a>
    <a href="../../route/path.php?book_list" id="a1">Books</a>
    <a href="../../route/path.php?address_list" id="a1">Address</a>
    <a href="../../route/path.php?employee_list" id="a1">Employee</a>
    <a href="../../route/path.php?library_list" id="a1">Librarian</a>
    <a href="../../route/path.php?student_list" id="a1">Student</a>
    <a href="../../controller/logout.php" id="a1">Log Out</a>
</div>
<?php
session_start();
require_once('../../model/libraryModel.php');
if(isset($_GET['library_id'])){
    $id = $_GET['library_id'];
    $library = getLibraryById($id);
}

?>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset>
            <legend>Edit Librarian</legend>
            <table align="center">
                <tr>
                    <td>Librarin Id:</td>
                    <td>
                        <input type="hidden" name="lib_id" value="<?php echo $library['id']; ?>">
                        <input type="text" id="library_id" class="form-control" name="library_id" value="<?php if (isset($employee['emp_id'])){echo $employee['emp_id'];}  ?>" >
                        <?php
                        if (isset($_SESSION['library_edit_error']['library_id'])) {
                            echo '<p class="error-message">' . $_SESSION['library_edit_error']['library_id'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Librarian Name:</td>
                    <td>
                        <input type="text" id="name" class="form-control" name="name" value="<?php if (isset($employee['name'])){echo $employee['name'];}  ?>">
                        <?php
                        if (isset($_SESSION['library_edit_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['library_edit_error']['name'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td>
                        <input type="text" id="department" class="form-control" name="department" value="<?php if (isset($employee['department'])){echo $employee['department'];}  ?>">
                        <?php
                        if (isset($_SESSION['library_edit_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['library_edit_error']['department'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="library_edit_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>
