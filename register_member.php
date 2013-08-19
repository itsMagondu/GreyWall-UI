<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$no = clean($_POST['memberno']);
	$fname = clean($_POST['firstname']);
	$lname = clean($_POST['lastname']);
	$mname = clean($_POST['middlename']);
	$dob = clean($_POST['dob']);
	$gender = clean($_POST['gender']);
	$idno = clean($_POST['idnumber']);
	$cell = clean($_POST['cellgroup']);
	$status = clean($_POST['status']);

	//Input Validations
	if($no == '') {
		$errmsg_arr[] = 'Member ID missing';
		$errflag = true;
	}
	if($fname == '') {
		$errmsg_arr[] = 'Name missing';
		$errflag = true;
	}

 
	
	//Check for gender and assign appropriate ID
	if($gender=='Male') {
	$gender='1';
	}
	else {
	$gender='2';	
	}
 	
	//Check for locality id
	if($cell=='Gikuni A') {
	$cell='1';
	}
	elseif($cell=='Gikuni B') {
	$cell='2';
	}
	elseif($cell=='Marugu')	{
	$cell='3';	
	}	
	else 
	{
	$cell='4';	
	}
	//Check for marital status ID
	if($status=='Single')
	{
	$status='1';
	}
	elseif($status=='Married')
	{
	$status='2';	
	}
	elseif($status=='Widowed')
	{
	$status='3';	
	}	
	else 
	{
	$status='4';	
	}

	//Check for member ID or ID number
	
	$qry="SELECT * FROM member_details WHERE memberid='$no'";
	$result=mysql_query($qry);
	if($result) {
		$errmsg_arr[] = 'Member ID already in use';
		$errflag = true;
	}
	$qry="SELECT * FROM member_details WHERE identificationnumber ='$idno'";
	$result=mysql_query($qry);
	if($result) {
		$errmsg_arr[] = 'The ID number is already registered';
		$errflag = true;
	}
	

	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: registration.php");
		exit();
	}
	
	//Create query
	$qry="INSERT INTO member_details (memberid, lastname, middlename, firstname, dateofbirth, genderid, identificationnumber, localityid, statusid) VALUES ('$no','$lname','$mname','$fname','$dob','$gender','$idno','$cell','$status')";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {		if(mysql_num_rows($result) > 0) {
			//Data entry Successful
			header("location: registration.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'An error occured. Please contact your system administrator';
			$errflag = true;
			if($errflag) {
				header("location: registration.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>
