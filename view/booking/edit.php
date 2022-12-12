<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit booking</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>

<?php
session_start();
require_once('../../model/bookingModel.php');
$id = $_GET['booking_id'];
$booking = getbookingById($id);
include "../../view/booking/menu.php"
?>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset>
            <legend>Edit booking</legend>
            <table align="center">
                <tr>
                    <td>booking Id:</td>
                    <td>
                        <input type="hidden" name="b_id" value="<?php echo $booking['id']; ?>">
                        <input type="text" id="name" class="form-control" name="booking_id" value="<?php echo $booking['booking_id']; ?>">
                        <?php
                        if (isset($_SESSION['booking_edit_error']['booking_id'])) {
                            echo '<p class="error-message">' . $_SESSION['booking_edit_error']['booking_id'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>booking Name:</td>
                    <td>
                        <input type="text" id="booking_id" class="form-control" name="name" value="<?php echo $booking['name']; ?>">
                        <?php
                        if (isset($_SESSION['booking_edit_error']['name'])) {
                            echo '<p class="error-message">' . $_SESSION['booking_edit_error']['name'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="booking_edit_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
</body>
</html>