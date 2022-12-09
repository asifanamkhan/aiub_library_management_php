<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Address List</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>

<body>
<br><br>
<?php
// include "../../view/dashboard.php"
include "../../view/address/menu.php"
?>
<?php
require_once('../../model/addressModel.php');
$address = getAllAddress();
?>
<h4 align="center">
    <form action="../../route/path.php" method="get">
        <input type="hidden" name="address_create_page">
        <button id="a2">Create new Address</button>
    </form>
</h4>
<div class="container">
    <?php
    session_start();
    if (isset($_SESSION['address_create_success'])) {
        echo '<p class="error-message">' . $_SESSION['address_create_success'] . '</p>';
    }
    if (isset($_SESSION['address_edit_success'])) {
        echo '<p class="error-message">' . $_SESSION['address_edit_success'] . '</p>';
    }
    if (isset($_SESSION['address_delete_success'])) {
        echo '<p class="error-message">' . $_SESSION['address_delete_success'] . '</p>';
    }

    ?>
    <table border="1" align="center">
        <thead>
        <tr>
            <th width="10%">#Sl</th>
            <th width="20%">House</th>
            <th width="20%">Road</th>
            <th width="20%">Thana</th>
            <th width="20%">City</th>
            <th width="10%">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $x = 0;
        while ($row = $address->fetch_array(MYSQLI_ASSOC)) {
            $x++;
            echo
                '<tr>' .
                '<td>' . $x . '</td>' .
                '<td>' . $row['house'] . '</td>' .
                '<td>' . $row['road'] . '</td>' .
                '<td>' . $row['thana'] . '</td>' .
                '<td>' . $row['city'] . '</td>' .
                '<td>
                        <div style="display: flex">
                            <form action="../../route/path.php?address_id='.$row['id'].'">

                                <input type="hidden" name="address_edit_view" value="' .$row['id'] . '"/>
                                <button id="a3">Edit</button>
                            </form>
                            <form action="../../route/path.php?address_id='.$row['id'].'">
                                <input type="hidden" name="address_delete" value="' . $row['id'] . '"/>
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
