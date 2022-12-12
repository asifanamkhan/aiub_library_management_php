<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Booking</title>
    <link rel="stylesheet" href="../../asset/main.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
<body>
<?php
session_start();
include "../../view/booking/menu.php";
include "../../model/bookModel.php";
include "../../model/studentModel.php";
$books = getAllBooks();
$students = getAllStudents();
?>
<br><br>
<div class="container">
    <form method="post" action="../../route/path.php">
        <fieldset class="field-area">
            <legend>Booking Create</legend>
            <span id="quantity_label" style="color: red"></span>
            <table align="center">
                <tr>
                    <td>Book</td>
                    <td>
                        <input type="hidden" name="previous_quantity" id="previous_quantity">
                        <select name="book_id" id="book_id" class="form-control">
                            <option value="">select book</option>
                            <?php
                            foreach ($books as $book) {
                                echo '<option value="'.$book['id'].'">'.$book['name'].'</option>';
                            }
                            ?>
                        </select>
                        <?php
                        if (isset($_SESSION['booking_create_error']['book_id'])) {
                            echo '<p class="error-message">' . $_SESSION['booking_create_error']['book_id'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Student</td>
                    <td>
                        <select name="student_id" id="student_id" class="form-control">
                            <option value="">select student</option>
                            <?php
                            foreach ($students as $student) {
                                echo '<option value="'.$student['id'].'">'.$student['name'].'</option>';
                            }
                            ?>
                        </select>
                        <?php
                        if (isset($_SESSION['booking_create_error']['employee_id'])) {
                            echo '<p class="error-message">' . $_SESSION['booking_create_error']['employee_id'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Booking date:</td>
                    <td>
                        <input type="date" id="booking_date" class="form-control" name="booking_date" value="">
                        <?php
                        if (isset($_SESSION['booking_create_error']['booking_date'])) {
                            echo '<p class="error-message">' . $_SESSION['booking_create_error']['booking_date'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Return date:</td>
                    <td>
                        <input type="date" id="return_date" class="form-control" name="return_date" value="">
                        <?php
                        if (isset($_SESSION['booking_create_error']['return_date'])) {
                            echo '<p class="error-message">' . $_SESSION['booking_create_error']['return_date'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td>
                        <input type="number" id="quantity" class="form-control" name="quantity" value="0">
                        <?php
                        if (isset($_SESSION['booking_create_error']['quantity'])) {
                            echo '<p class="error-message">' . $_SESSION['booking_create_error']['quantity'] . '</p>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn-info" type="submit" name="booking_create_submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>
<script>
    $('#quantity_label').hide();
    var quantity = 0;
    $('#book_id').on('change', function(){
        var book_id = $(this).val();
        $('#quantity').val(0)
        if(book_id){
            $.ajax({
                type: "POST", //we are using GET method to get all record from the server
                url: "../../route/path.php",
                data: {
                    book_quantity_get: book_id,
                },
                // get the route value
                success: function(data) {
                    quantity = data;
                    $('#previous_quantity').val(quantity);
                    $('#quantity_label').html('Selected book has ' + quantity+ ' left');
                    $('#quantity_label').show();
                }
            });
        }else{
            $('#quantity_label').hide();
        }

    })

    $('#quantity').on('input', function(){
        var input_quantity = parseInt($(this).val());
        if(input_quantity > quantity){
            alert('Selected book has only '+quantity+ '  copy left');
            $('#quantity').val(0)
        }
    })

</script>
</body>
</html>