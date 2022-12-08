<?php
require_once('db.php');

function stu_create($student){
    $con = getConnection();
    $sql = "INSERT INTO `students`(`name`,`student_id`,`department`) 
                VALUES ('{$student['name']}','{$student['student_id']}','{$student['department']}')";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function getStudentById($id){
    $con = getConnection();
    $sql= "select * from students where id={$id}";
    $result = mysqli_query($con, $sql);
    $student = mysqli_fetch_assoc($result);
    return $student;
}

function getAllStudents(){
    $con = getConnection();
    $sql = "select * from students";
    $result = mysqli_query($con, $sql);

    return $result;
}

function stu_edit($student){
    $con = getConnection();
    $sql= "UPDATE students set name='{$student['name']}', 
		                      student_id='{$student['student_id']}',  
		                      department='{$student['department']}'  
		                      where id={$student['id']}";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function stu_delete($id){
    $con = getConnection();
    $sql = "DELETE FROM students WHERE id='$id'";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

?>