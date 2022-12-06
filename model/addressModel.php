<?php
require_once('db.php');

function add_create($address){
    $con = getConnection();
    $sql = "INSERT INTO `address`(`house`,`road`,`thana`,`city`) 
                VALUES ('{$address['house']}','{$address['road']}','{$address['thana']}','{$address['city']}')";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function getAddressById($id){
    $con = getConnection();
    $sql= "select * from address where id={$id}";
    $result = mysqli_query($con, $sql);
    $address = mysqli_fetch_assoc($result);
    return $address;
}

function getAllAddress(){
    $con = getConnection();
    $sql = "select * from address";
    $result = mysqli_query($con, $sql);

    return $result;
}

function add_edit($address){
    $con = getConnection();
    $sql= "UPDATE address set house='{$address['house']}', 
		                      road='{$address['road']}' , 
		                      thana='{$address['thana']}',  
		                      city='{$address['city']}'  
		                      where id={$address['id']}";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function add_delete($id){
    $con = getConnection();
    $sql = "DELETE FROM address WHERE id='$id'";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}


?>