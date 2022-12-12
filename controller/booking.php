<?php
require_once('../model/bookingModel.php');
require_once('../model/bookModel.php');

function booking_create()
{
    $booking_create_error = [];

    if (!$_POST['book_id']) {
        $booking_create_error['book_id'] = 'Please enter book';
    }
    if (!$_POST['student_id']) {
        $booking_create_error['student_id'] = 'Please enter student';
    }
    if (!$_POST['booking_date']) {
        $booking_create_error['booking_date'] = 'Please enter booking date';
    }
    if (!$_POST['return_date']) {
        $booking_create_error['return_date'] = 'Please enter return date';
    }
    if (!$_POST['quantity']) {
        $booking_create_error['quantity'] = 'Please enter quantity';
    }

    if ($booking_create_error) {
        $_SESSION["booking_create_error"] = $booking_create_error;
        header("location: ../view/booking/create.php");

    } else {
        $booking['book_id'] = $_POST['book_id'];
        $booking['student_id'] = $_POST['student_id'];
        $booking['booking_date'] = $_POST['booking_date'];
        $booking['return_date'] = $_POST['return_date'];
        $booking['quantity'] = $_POST['quantity'];
        $booking['previous_quantity'] = $_POST['previous_quantity'];
        $result = booking_model_create($booking);
        $current_quantity = (int)$booking['previous_quantity'] - (int)$booking['quantity'];
        $book_quantity_fix =  book_quantity_fix($booking['book_id'], $current_quantity);

        if ($result == TRUE) {
            $_SESSION["booking_create_success"] = "New booking created successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/booking/list.php");
    }

}

function booking_return($id, $book_id, $booking_quantity, $book_quantity){
    status_change($id);
    $fixed_quantity = (int)$booking_quantity + (int)$book_quantity;
    book_quantity_fix($book_id, $fixed_quantity);
    header("location: ../view/booking/list.php");
}



?>