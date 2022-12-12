<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit library</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<?php
session_start();
require_once('../../model/libraryModel.php');
if(isset($_GET['library_id'])){
    $id = $_GET['library_id'];
    $library = getLibraryById($id);
}
include "../../view/library/menu.php";
?>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset class="field-area">
            <legend>Edit Librarian</legend>
            <table align="center">
                <tr>
                    <td>Librarian Id:</td>
                    <td>
                        <input type="hidden" name="lib_id" value="<?php echo $library['id']; ?>">
                        <input type="text" id="library_id" class="form-control" name="library_id" value="<?php if (isset($library['lib_id'])){echo $library['lib_id'];}  ?>" >
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
                        <input type="text" id="name" class="form-control" name="name" value="<?php if (isset($library['name'])){echo $library['name'];}  ?>">
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
                        <input type="text" id="department" class="form-control" name="department" value="<?php if (isset($library['department'])){echo $library['department'];}  ?>">
                        <?php
                        if (isset($_SESSION['library_edit_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['library_edit_error']['department'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn-info" type="submit" name="library_edit_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>
