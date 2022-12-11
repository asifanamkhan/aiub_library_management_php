<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>

<body>
<br><br>
<?php
session_start();
include "../../view/library/menu.php";
// include "../../view/dashboard.php";
require_once('../../model/libraryModel.php');
$library = getAllLibrary();
?>
<h4 align="center">
    <form action="../../route/path.php" method="get">
        <input type="hidden" name="library_create_page">
        <button id="a2">Create new Libraian</button>
    </form>
</h4>
<div class="container">
    <?php
    if (isset($_SESSION['library_create_success'])) {
        echo '<p class="error-message">' . $_SESSION['library_create_success'] . '</p>';
    }
    if (isset($_SESSION['library_edit_success'])) {
        echo '<p class="error-message">' . $_SESSION['library_edit_success'] . '</p>';
    }
    if (isset($_SESSION['library_delete_success'])) {
        echo '<p class="error-message">' . $_SESSION['library_delete_success'] . '</p>';
    }

    ?>
    <table border="1" align="center">
        <thead>
        <tr>
            <th width="10%">#Sl</th>
            <th width="20%">Id</th>
            <th width="30%">Name</th>
            <th width="30%">Department</th>
            <th width="10%">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $x = 0;
        while ($row = $library->fetch_array(MYSQLI_ASSOC)) {
            $x++;
            echo
                '<tr>' .
                '<td>' . $x . '</td>' .
                '<td>' . $row['lib_id'] . '</td>' .
                '<td>' . $row['name'] . '</td>' .
                '<td>' . $row['department'] . '</td>' .
                '<td>
                        <div style="display: flex">
                            <form action="../../route/path.php?library_id='.$row['id'].'">

                                <input type="hidden" name="library_edit_view" value="' .$row['id'] . '"/>
                                <button id="a3">Edit</button>
                            </form>
                            <form action="../../route/path.php?library_id='.$row['id'].'">
                                <input type="hidden" name="library_delete" value="' . $row['id'] . '"/>
                                <button id="a3">Delete</button>
                            </form>
                        </div>
                    </td>' .
                '</tr>';
        }
        ?>

        </tbody>
    </table>
</div>
</body>
</html>
