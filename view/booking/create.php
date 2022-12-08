<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Book</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<br><br>
<?php
session_start();
include "../../view/book/menu.php"
?>
<br><br>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset>
            <legend>Book Create</legend>
            <table align="center">
                <tr>
                    <td>Book Id:</td>
                    <td>
                        <input type="text" id="user" class="form-control" name="name" value="">
                        <?php
                        if (isset($_SESSION['book_create_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['book_create_error']['name'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Book Name:</td>
                    <td>
                        <input type="text" id="book_id" class="form-control" name="book_id" value="">
                        <?php
                        if (isset($_SESSION['book_create_error']['book_id'])) {
                            echo '<p class="error-message">' . $_SESSION['book_create_error']['book_id'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="book_create_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>