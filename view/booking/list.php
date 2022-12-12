<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking List</title>
    <link rel="stylesheet" href="../../asset/main.css">
</head>
<body>

<?php
include "../../view/booking/menu.php"
?>
<?php
require_once('../../model/bookingModel.php');
$bookings = getAllbookings();
?>
<h4 align="center">
    <form style="display: inline-block" action="../../route/path.php" method="get">
        <input type="hidden" name="booking_create_page">
        <button class="btn-info">Create new booking</button>
    </form>
</h4>
<div class="container">
    <?php
    session_start();
    if (isset($_SESSION['booking_create_success'])) {
        echo '<p class="error-message">' . $_SESSION['booking_create_success'] . '</p>';
    }
    if (isset($_SESSION['booking_edit_success'])) {
        echo '<p class="error-message">' . $_SESSION['booking_edit_success'] . '</p>';
    }
    if (isset($_SESSION['booking_delete_success'])) {
        echo '<p class="error-message">' . $_SESSION['booking_delete_success'] . '</p>';
    }

    ?>
    <table class="table">
        <thead>
        <tr>
            <th width="">#Sl</th>
            <th width="">Book Id</th>
            <th width="">Book name</th>
            <th width="">Student Id</th>
            <th width="">Student name</th>
            <th width="">Booking date</th>
            <th width="">Return date</th>
            <th width="">quantity</th>
            <th width="">status</th>
            <th width="">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $x = 0;
        while ($row = $bookings->fetch_array(MYSQLI_ASSOC)) {
            $x++;
            echo
                '<tr>' .
                '<td>' . $x . '</td>' .
                '<td>' . $row['book_id'] . '</td>' .
                '<td>' . $row['book_name'] . '</td>' .
                '<td>' . $row['student_id'] . '</td>' .
                '<td>' . $row['student_name'] . '</td>' .
                '<td>' . $row['booking_date'] . '</td>' .
                '<td>' . $row['return_date'] . '</td>' .
                '<td>' . $row['quantity'] . '</td>' .
                '<td' . (($row['status'] == 0) ? ' class="booked"' : ' class="returned"') . ' >' . (($row['status'] == 0) ? "Booked" : "Returned") . '</td>' .
                '<td>'
                . (($row['status'] == 0) ? '<div style="display: flex">
                            <form action="../../route/path.php" method="post">
           
                                <input type="hidden" name="booking_return" value="' . $row['id'] . '"/>
                                <input type="hidden" name="booking_quantity" value="' . $row['quantity'] . '"/>
                                <input type="hidden" name="book_quantity" value="' . $row['book_quantity'] . '"/>
                             
                                <input type="hidden" name="booking_book_id" value="' . $row['book_primary_id'] . '"/>
                                <button class="table-btn-edit shadow" >Return</button>
                            </form>
           
                        </div>' : "--")
                . '</td>' .
                '</tr>';
        }
        ?>

        </tbody>
    </table>
</div>
</body>
</html>