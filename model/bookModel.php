<?php
require_once('db.php');

function create($book){
    $con = getConnection();
    $sql = "INSERT INTO `books`(`name`,`book_id`,`quantity`) 
                VALUES ('{$book['name']}','{$book['book_id']}','{$book['quantity']}')";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

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

function edit($book){
    $con = getConnection();
    $sql= "UPDATE books set name='{$book['name']}', 
		                      book_id='{$book['book_id']}',  
		                      quantity='{$book['quantity']}'  
		                      where id={$book['id']}";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function delete($id){
    $con = getConnection();
    $sql = "DELETE FROM books WHERE id='$id'";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

?>