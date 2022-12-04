<?php
require_once('db.php');

function getBookById($id){
    $con = getConnection();
    $sql= "select * from books where id={$id}";
    $result = mysqli_query($con, $sql);
    $book = mysqli_fetch_assoc($result);
    return $book;
}

function getAllBooks(){
    $con = getConnection();
    $sql = "select * from books";
    $result = mysqli_query($con, $sql);

    return $result;
}


function editBook($user){
    $con = getConnection();
    $sql= "update teacher set username='{$user['username']}', 
		                      email='{$user['email']}' , 
		                      dateofbirth='{$user['dateofbirth']}' , 
		                      gender='{$user['gender']}' 
		                      where id={$user['id']}";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}





?>