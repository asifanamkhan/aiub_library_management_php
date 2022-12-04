<?php

	require_once('db.php');

	function validate($username, $password){
		$con = getConnection();
		$sql= "select * from teachers where name='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$teacher = mysqli_fetch_assoc($result);

		if($teacher){
			return [
                'status' => true,
                'data' => $teacher['id']
            ];
		}else{
			return [
                'status' => false,
            ];
		}
	}

    function isExist($name){

        $con = getConnection();
        $sql= "select * from teachers where name='{$name}'";

        $result = mysqli_query($con, $sql);
        $teacher = mysqli_fetch_assoc($result);

        if($teacher){
            return true;
        }else{
            return false;
        }
    }

	function getTeachersById($id){
		$con = getConnection();
		$sql= "select * from teachers where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getTeachersByUserName($username){
		$con = getConnection();
		//$sql= "select * from admin where username={$username}";
		$sql="SELECT * FROM `teachers` WHERE `username` = {$username}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllTeachers(){
		$con = getConnection();
		$sql = "select * from teachers";
		$result = mysqli_query($con, $sql);

		return $result;
	}


	function passwordChange($password, $username){
		$con = getConnection();
		$sql= "update teacher set password={$password} where username={$username}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}



?>