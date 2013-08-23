<?php
	//Start session
	session_start();
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
	
	//Array to pass results
	$result_arr = array();
 
	//Include database connection details
	require_once('connection.php');
 
	//Create query  || //'$password'";
	$qry="SELECT * FROM member_details"; 
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {		
		if(mysql_num_rows($result) > 0) {
			while($data = mysql_fetch_row($result)){
				$result_arr[] = $data}
			$_SESSION['RESULT_ARR'] = $result_arr;
			header("location: registration.php");
			exit();
		}
		else {
			//Login failed
			$errmsg_arr[] = 'No members have been registered yet';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				header("location: registration.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>
