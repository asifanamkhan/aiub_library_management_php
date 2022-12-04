<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Book</title>
</head>
<body>

<div align="center">
    <form method="post" action="../../controller/bookDelete.php">
        <input type="hidden" id="book_id" name="book_id" value="<?php print_r($_GET['id']); ?>">
        <input type="submit" name="submit" value="Yes">
    </form>

    <button>
        <a href="list.php">No</a>
    </button>
</div>
</body>
</html>