<?php
require_once('db.php');

function booking_model_create($booking){
    $con = getConnection();
    $sql = "INSERT INTO `booking`(`book_id`,`student_id`,`booking_date`,`return_date`,`quantity`) 
                VALUES ('{$booking['book_id']}',
                        '{$booking['student_id']}',
                        '{$booking['booking_date']}',
                        '{$booking['return_date']}',
                        '{$booking['quantity']}'
                        )";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function getbookingById($id){
    $con = getConnection();
    $sql= "select * from booking where id={$id}";
    $result = mysqli_query($con, $sql);
    $booking = mysqli_fetch_assoc($result);
    return $booking;
}

function getAllbookings(){
    $con = getConnection();
    $sql = "SELECT
                booking.quantity as quantity,
                booking.id as id,
                booking.booking_date,
                booking.return_date,
                booking.status,
                students.student_id,
                students.name as student_name,
                books.book_id,
                books.id as book_primary_id,
                books.quantity as book_quantity,
                books.name as book_name
                FROM books
            INNER JOIN booking
                ON books.id = booking.book_id
            INNER JOIN students
                        ON students.id = booking.student_id";

    $result = mysqli_query($con, $sql);
    return $result;
}
function book_quantity_fix($id, $quantity){
    $con = getConnection();
    $sql= "UPDATE books set quantity='{$quantity}'  
		                      where id={$id}";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function status_change($id){
    $con = getConnection();
    $sql= "UPDATE booking set status='1' 
		                      where id={$id}";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}



?>