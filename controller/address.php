<?php
require_once('../model/addressModel.php');

function address_create()
{
    $address_create_error = [];

    if (!$_POST['house']) {
        $address_create_error['house'] = 'Please enter house';
    }
    if (!$_POST['road']) {
        $address_create_error['road'] = 'Please enter road';
    }
    if (!$_POST['thana']) {
        $address_create_error['thana'] = 'Please enter thana';
    }
    if (!$_POST['city']) {
        $address_create_error['city'] = 'Please enter city';
    }

    if ($address_create_error) {
        $_SESSION["address_create_error"] = $address_create_error;
        header("location: ../view/address/create.php");

    } else {
        $address['house'] = $_POST['house'];
        $address['road'] = $_POST['road'];
        $address['thana'] = $_POST['thana'];
        $address['city'] = $_POST['city'];
        $result = add_create($address);

        if ($result == TRUE) {
            $_SESSION["address_create_success"] = "New address created successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/address/list.php");
    }

}

function address_edit()
{
    unset($_SESSION['address_edit_error']);
    unset($_SESSION['address_edit_success']);

    $address_edit_error = [];
    if (!$_POST['house']) {
        $address_edit_error['house'] = 'Please enter house';
    }
    if (!$_POST['road']) {
        $address_edit_error['road'] = 'Please enter road';
    }
    if (!$_POST['thana']) {
        $address_edit_error['thana'] = 'Please enter thana';
    }
    if (!$_POST['city']) {
        $address_edit_error['city'] = 'Please enter city';
    }

    if ($address_edit_error) {
        $_SESSION["address_edit_error"] = $address_edit_error;
        header("location: ../view/address/edit.php");

    } else {
        $address['house'] = $_POST['house'];
        $address['road'] = $_POST['road'];
        $address['thana'] = $_POST['thana'];
        $address['city'] = $_POST['city'];
        $address['id'] = $_POST['address_id'];

        $result = add_edit($address);

        if ($result == TRUE) {
            $_SESSION["address_edit_success"] = "Address updated successfully";
        } else {
            echo "Something went wrong";
        }

        header("location: ../view/address/list.php");
    }

}

function address_delete($id)
{
    $result = add_delete($id);

    if ($result == TRUE) {
        $_SESSION["address_delete_success"] = "Address deleted successfully";
    } else {
        echo "Something went wrong";
    }

    header("location: ../view/address/list.php");
}

?>