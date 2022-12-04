<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>

<body>
    <br><br>
    <div align="center">
        <a href="../dashboard.php">Dashboard</a> |
        <a href="../profile/show.php">Go to Profile</a> |
        <a href="list.php">Books</a> |
        <a href="../../controller/logout.php"> Log Out</a>
    </div>
    <?php
        require_once('../../model/bookModel.php');
        $books = getAllBooks();
    ?>
    <h4 align="center">
        <a href="create.php">Create new Book</a>
    </h4>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>#Sl</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php
                while ($row = $books->fetch_array(MYSQLI_ASSOC)) {
                    echo
                        '<tr>' .
                        '<td>' . $row['id'] . '</td>' .
                        '<td>' . $row['name'] . '</td>' .
                        '<td> <a href="edit.php?id='.$row['id'].'">Edit</a></td>'.
                        '<td> <a href="delete.php?id='.$row['id'].'">Delete</a></td>'.
                        '</tr>';
                }
            ?>

        </tbody>
    </table>
</body>
</html>