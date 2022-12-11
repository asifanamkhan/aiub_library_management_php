<?php
require_once('db.php');

function lib_create($library){
    $con = getConnection();
    $sql = "INSERT INTO `library`(`lib_id`, `name`,`department`)
                VALUES ('{$library['library_id']}','{$library['name']}','{$library['department']}')";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function getLibraryById($id){
    $con = getConnection();
    $sql= "select * from library where id={$id}";
    $result = mysqli_query($con, $sql);
    $library = mysqli_fetch_assoc($result);
    //print_r($library);
    return $library;
}

function getAllLibrary(){
    $con = getConnection();
    $sql = "select * from library";
    $result = mysqli_query($con, $sql);

    return $result;
}

function lib_edit($library){
    $con = getConnection();
    $sql= "UPDATE library set lib_id='{$library['library_id']}',
		                      name='{$library['name']}',
		                      department='{$library['department']}'
		                      where id={$library['id']}";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function lib_delete($id){
    $con = getConnection();
    $sql = "DELETE FROM library WHERE id='$id'";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}


?>
