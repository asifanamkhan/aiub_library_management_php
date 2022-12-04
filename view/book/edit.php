<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
</head>
<body>
    <?php
        require_once('../../model/bookModel.php');
        $id = $_GET['id'];
        $book = getBookById($id);
    ?>
    <div align="center">
        <form method="post" action="../../controller/bookUpdate.php">
            <fieldset>
                <legend>Edit Book</legend>
                <table>
                    <tr>
                        <td>Book name:</td>
                        <td>
                            <input type="text" id="user" name="name" value="<?php print_r($book['name']); ?>">
                            <input type="hidden" id="book_id" name="book_id" value="<?php print_r($book['id']); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>