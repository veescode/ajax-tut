<?php
/**
*	Author vusani.com
*	Simple login with json
*/

$results = array(); //basically the results to be convented into json

	$con = mysqli_connect("localhost", "root" , "","ajaxtutorial");
	if (mysqli_connect_errno())
	{
		$results['valid'] = 1;
		$results['msg'] = "Error connecting to database";
		echo json_encode($results);
		exit();
	}
	
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		$results['valid'] = 1;
		$results['msg'] = "The Username and Password are required";
		echo json_encode($results);
		exit();
	}

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "SELECT id FROM users WHERE username = '".$user."' AND Password = '".$pass ."';";
	$result =  mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		$results['valid'] = 0; //username and password are valid
		$results['msg'] = "Login successful :-)";
		echo json_encode($results);
		exit();
	}

	$results['valid'] = 1;
	$results['msg'] = "Username and/or Password incorrect";
	echo json_encode($results);
	
	mysqli_close($con);
	
?>