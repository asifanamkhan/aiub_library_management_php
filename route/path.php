<?php
session_start();
require_once('../controller/book.php');
require_once('../controller/address.php');
require_once('../controller/employee.php');


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
}else{
    header("location: ../index.php");
}

//book section


?>