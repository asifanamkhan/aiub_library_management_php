<?php
session_start();
require_once('../controller/book.php');
require_once('../controller/address.php');
require_once('../controller/employee.php');
require_once('../controller/library.php');
require_once('../controller/student.php');
require_once('../controller/booking.php');

if(isset($_POST['book_quantity_get'])){
    get_book_quantity();
}
function get_book_quantity(){
    print_r(getBookById($_POST['book_quantity_get'])['quantity']);
}

if(isset($_COOKIE['loggedInId'])){
    if (isset($_GET['book_list'])) {
        unset($_SESSION['book_create_success']);
        unset($_SESSION['book_edit_success']);
        unset($_SESSION['book_delete_success']);
        header("location: ../view/book/list.php");
    }
    if (isset($_GET['book_create_page'])) {
        unset($_SESSION['book_create_error']);
        header("location: ../view/book/create.php");
    }
    if (isset($_POST['book_create_submit'])) {
        book_create();
    }
    if (isset($_GET['book_edit_view'])) {
        header("location: ../view/book/edit.php?book_id=".$_GET['book_edit_view']);
    }
    if (isset($_POST['book_edit_submit'])) {
        unset($_SESSION['book_edit_error']);
        book_edit();
    }
    if (isset($_GET['book_delete'])) {
        book_delete($_GET['book_delete']);
    }

//Address
    if (isset($_GET['address_list'])) {
        unset($_SESSION['address_create_success']);
        unset($_SESSION['address_edit_success']);
        unset($_SESSION['address_delete_success']);
        header("location: ../view/address/list.php");
    }
    if (isset($_GET['address_create_page'])) {
        unset($_SESSION['address_create_error']);
        header("location: ../view/address/create.php");
    }
    if (isset($_POST['address_create_submit'])) {
        address_create();
    }
    if (isset($_GET['address_edit_view'])) {
        header("location: ../view/address/edit.php?address_id=".$_GET['address_edit_view']);
    }
    if (isset($_POST['address_edit_submit'])) {
        unset($_SESSION['address_edit_error']);
        address_edit();
    }
    if (isset($_GET['address_delete'])) {
        address_delete($_GET['address_delete']);
    }

//Employee
    if (isset($_GET['employee_list'])) {
        unset($_SESSION['employee_create_success']);
        unset($_SESSION['employee_edit_success']);
        unset($_SESSION['employee_delete_success']);
        header("location: ../view/employee/list.php");
    }
    if (isset($_GET['employee_create_page'])) {
        unset($_SESSION['employee_create_error']);
        header("location: ../view/employee/create.php");
    }
    if (isset($_POST['employee_create_submit'])) {
        employee_create();
    }
    if (isset($_GET['employee_edit_view'])) {
        header("location: ../view/employee/edit.php?employee_id=".$_GET['employee_edit_view']);
    }
    if (isset($_POST['employee_edit_submit'])) {
        unset($_SESSION['employee_edit_error']);
        employee_edit();
    }
    if (isset($_GET['employee_delete'])) {
        employee_delete($_GET['employee_delete']);
    }

    //Librarian
    if (isset($_GET['library_list'])) {
        unset($_SESSION['library_create_success']);
        unset($_SESSION['library_edit_success']);
        unset($_SESSION['library_delete_success']);
        header("location: ../view/library/list.php");
    }
    if (isset($_GET['library_create_page'])) {
        unset($_SESSION['library_create_error']);
        header("location: ../view/library/create.php");
    }
    if (isset($_POST['library_create_submit'])) {
        library_create();
    }
    if (isset($_GET['library_edit_view'])) {
        header("location: ../view/library/edit.php?library_id=".$_GET['library_edit_view']);
    }
    if (isset($_POST['library_edit_submit'])) {
        unset($_SESSION['library_edit_error']);
        library_edit();
    }
    if (isset($_GET['library_delete'])) {
        library_delete($_GET['library_delete']);
    }


    //Student
    if (isset($_GET['student_list'])) {
        unset($_SESSION['student_create_success']);
        unset($_SESSION['student_edit_success']);
        unset($_SESSION['student_delete_success']);
        header("location: ../view/student/list.php");
    }
    if (isset($_GET['student_create_page'])) {
        unset($_SESSION['student_create_error']);
        header("location: ../view/student/create.php");
    }
    if (isset($_POST['student_create_submit'])) {
        student_create();
    }
    if (isset($_GET['student_edit_view'])) {
        header("location: ../view/student/edit.php?student_id=".$_GET['student_edit_view']);
    }
    if (isset($_POST['student_edit_submit'])) {
        unset($_SESSION['student_edit_error']);
        student_edit();
    }
    if (isset($_GET['student_delete'])) {
        student_delete($_GET['student_delete']);
    }

    //Booking
    if (isset($_GET['booking_list'])) {
        unset($_SESSION['booking_create_success']);
        unset($_SESSION['booking_edit_success']);
        unset($_SESSION['ebooking_delete_success']);
        header("location: ../view/booking/list.php");
    }
    if (isset($_GET['booking_create_page'])) {
        unset($_SESSION['booking_create_error']);
        header("location: ../view/booking/create.php");
    }
    if (isset($_POST['booking_create_submit'])) {
        booking_create();
    }
    if (isset($_POST['booking_return'])) {
        unset($_SESSION['booking_return']);
        booking_return($_POST['booking_return'],$_POST['booking_book_id'],$_POST['booking_quantity'], $_POST['book_quantity']);
    }





}else{
    header("location: ../index.php");
}

//book section


?>
