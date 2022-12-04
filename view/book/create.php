<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Book</title>
</head>
<body>
    <br><br>
    <div align="center">
        <a href="dashboard.php">Dashboard</a> |
        <a href="profile/show.php">Go to Profile</a> |
        <a href="book/list.php">Books</a> |
        <a href="../controller/logout.php"> Log Out</a>
    </div>
    <br><br>
    <div>
        <form method="post" action="../../controller/book.php">
            <table align="center">
                <tr>
                    <td>Book name:</td>
                    <td><input type="text" id="user" name="name" value="" placeholder="Enter Book Name"></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>        
    </div>
</body>
</html>