<?php

	$host 	= "localhost";
	$dbname = 'aiub_library_management';
	$dbuser = 'root';
	$dbpassword = '';

	function getConnection(){
		global $host;
		global $dbname;
		global $dbuser;
		global $dbpassword;

		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}

?>