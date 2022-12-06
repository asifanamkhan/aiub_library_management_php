<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Address</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>
<br><br>
<?php
session_start();
include "../address/menu.php"
?>
<br><br>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset>
            <legend>Address Create</legend>
            <table align="center">
                <tr>
                    <td>House:</td>
                    <td>
                        <input type="text" id="house" class="form-control" name="house" value="">
                        <?php
                        if (isset($_SESSION['address_create_error']['house'])) {
                            echo '<p class="error-message">' . $_SESSION['address_create_error']['house'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Road:</td>
                    <td>
                        <input type="text" id="road" class="form-control" name="road" value="">
                        <?php
                        if (isset($_SESSION['address_create_error']['road'])) {
                            echo '<p class="error-message">' . $_SESSION['address_create_error']['road'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Thana:</td>
                    <td>
                        <input type="text" id="thana" class="form-control" name="thana" value="">
                        <?php
                        if (isset($_SESSION['address_create_error']['thana'])) {
                            echo '<p class="error-message">' . $_SESSION['address_create_error']['thana'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td>
                        <input type="text" id="city" class="form-control" name="city" value="">
                        <?php
                        if (isset($_SESSION['address_create_error']['city'])) {
                            echo '<p class="error-message">' . $_SESSION['address_create_error']['city'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="address_create_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>