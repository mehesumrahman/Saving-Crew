<?php

session_start();

//initializing variables
/*$username = "";
$email = "";
$password_1 = "";
$password_2 = ""; 
$results;*/

$errors = array();

//connect to db
$db = mysqli_connect('localhost', 'root', '', 'savingcrew_db') or die("could not connect to database");

//register users
if (isset($_POST['register_user'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

$hashed_password = password_hash($password_1, PASSWORD_DEFAULT);

$user_check_query = "SELECT * from user where email = '$email'";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

//form validation
/*if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password_1)) {array_push($errors, "Password is required");}
if($password_1 != $password_2) {array_push($errors, "Passwords do not match");}*/

//check db for user with username


if($user){
	//if($user['username'] == $username){array_push($errors, "Username already exists");}
	if($user['email'] == $email){array_push($errors, "This email ID already has a registered username");}
	else{

	$query = "INSERT INTO user(username, email, password) VALUES('$username', '$email', '$password')";

	mysqli_query($db, $query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";

	header('location: index.php');
}

}




}
?>




<?php
//Login user
if (isset($_POST['login_user'])) {

	$username = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password_1']);

	if (empty($email)) {
		array_push($errors, "email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = password_hash($password, PASSWORD_DEFAULT);;
		$query = "SELECT * FROM user WHERE email=$email AND password=$password";

		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results)) {
			
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "Logged in successfully";

			header("location: index.php");
		}
		else{
			array_push($errors, "Wrong username/password. Please try again");
		}
	}
}



?>