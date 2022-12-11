<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<br><br>
<?php
session_start();
include "../../view/library/menu.php";
?>
<br><br>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset>
            <legend>Employee Create</legend>
            <table align="center">
                <tr>
                    <td>Librarian Id:</td>
                    <td>
                        <input type="text" id="user" class="form-control" name="library_id" value="">
                        <?php
                        if (isset($_SESSION['library_create_error']['library_id'])) {
                            echo '<p class="error-message">' . $_SESSION['library_create_error']['library_id'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Librarian Name:</td>
                    <td>
                        <input type="text" id="name" class="form-control" name="name" value="">
                        <?php
                        if (isset($_SESSION['library_create_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['library_create_error']['name'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td>
                        <input type="text" id="department" class="form-control" name="department" value="">
                        <?php
                        if (isset($_SESSION['library_create_error']['department'])) {
                            echo '<p class="error-message">' . $_SESSION['library_create_error']['department'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="library_create_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>
