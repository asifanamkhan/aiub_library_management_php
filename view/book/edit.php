<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<div align="center">
    <a href="../dashboard.php" id="a1">Dashboard</a>
    <a href="../profile/show.php" id="a1">Profile</a>
    <a href="../../route/path.php?book_list" id="a1">Books</a>
    <a href="../../route/path.php?address_list" id="a1">Address</a>
    <a href="../../route/path.php?employee_list" id="a1">Employee</a>
    <a href="../../route/path.php?student_list" id="a1">Student</a>
    <a href="../../controller/logout.php" id="a1">Log Out</a>
</div>
<?php
session_start();
require_once('../../model/bookModel.php');
$id = $_GET['book_id'];
$book = getBookById($id);
?>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset>
            <legend>Edit Book</legend>
            <table align="center">
                <tr>
                    <td>Book Id:</td>
                    <td>
                        <input type="hidden" name="b_id" value="<?php echo $book['id']; ?>">
                        <input type="text" id="name" class="form-control" name="book_id" value="<?php echo $book['book_id']; ?>">
                        <?php
                        if (isset($_SESSION['book_edit_error']['book_id'])) {
                            echo '<p class="error-message">' . $_SESSION['book_edit_error']['book_id'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Book Name:</td>
                    <td>
                        <input type="text" id="book_id" class="form-control" name="name" value="<?php echo $book['name']; ?>">
                        <?php
                        if (isset($_SESSION['book_edit_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['book_edit_error']['name'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="book_edit_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>
