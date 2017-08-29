<?php
// REGISTER USER
include_once('opendb.php');
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['uname']);
	$password_1 = mysqli_real_escape_string($db, $_POST['psw']);
	

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { array_push($errors, "Username is required"); }
	
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
	}

}

// ... 
?>
