<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>

<body>
<?php
include "../../view/book/menu.php"
?>
<?php
require_once('../../model/bookModel.php');
$books = getAllBooks();
?>
<h4 align="center">
    <form style="display: inline-block" action="../../route/path.php" method="get">
        <input type="hidden" name="book_create_page">
        <button class="btn-info">Create new Book</button>
    </form>
</h4>
<div class="container">
    <?php
    session_start();
    if (isset($_SESSION['book_create_success'])) {
        echo '<p class="error-message">' . $_SESSION['book_create_success'] . '</p>';
    }
    if (isset($_SESSION['book_edit_success'])) {
        echo '<p class="error-message">' . $_SESSION['book_edit_success'] . '</p>';
    }
    if (isset($_SESSION['book_delete_success'])) {
        echo '<p class="error-message">' . $_SESSION['book_delete_success'] . '</p>';
    }

    ?>
    <table class="table">
        <thead>
        <tr>
            <th width="10%">#Sl</th>
            <th width="20%">Id</th>
            <th width="30%">Name</th>
            <th width="30%">Stock</th>
            <th width="10%">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $x = 0;
        while ($row = $books->fetch_array(MYSQLI_ASSOC)) {
            $x++;
            echo
                '<tr>' .
                '<td>' . $x . '</td>' .
                '<td>' . $row['book_id'] . '</td>' .
                '<td>' . $row['name'] . '</td>' .
                '<td>' . $row['quantity'] . '</td>' .
                '<td>
                        <div style="display: flex">
                            <form action="../../route/path.php?book_id='.$row['id'].'">

                                <input type="hidden" name="book_edit_view" value="' .$row['id'] . '"/>
                                <button class="table-btn-edit shadow">Edit</button>
                            </form>
                            <form action="../../route/path.php?book_id='.$row['id'].'">
                                <input type="hidden" name="book_delete" value="' . $row['id'] . '"/>
                                <button class="table-btn-delete shadow">Delete</button>
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
