<?php
require_once('db.php');

function emp_create($employee){
    $con = getConnection();
    $sql = "INSERT INTO `employee`(`emp_id`,`name`,`department`) 
                VALUES ('{$employee['employee_id']}','{$employee['name']}','{$employee['department']}')";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function getEmployeeById($id){
    $con = getConnection();
    $sql= "select * from employee where id={$id}";
    $result = mysqli_query($con, $sql);
    $employee = mysqli_fetch_assoc($result);
    return $employee;
}

function getAllEmployee(){
    $con = getConnection();
    $sql = "select * from employee";
    $result = mysqli_query($con, $sql);

    return $result;
}

function emp_edit($employee){
    $con = getConnection();
    $sql= "UPDATE employee set emp_id='{$employee['employee_id']}', 
		                      name='{$employee['name']}',  
		                      department='{$employee['department']}'  
		                      where id={$employee['id']}";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function emp_delete($id){
    $con = getConnection();
    $sql = "DELETE FROM employee WHERE id='$id'";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}


?>