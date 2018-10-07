<?php
session_start();
/*
$username = "";
$firstname = "";
$lastname = "";
$email    = "";*/
$errors = array(); 

/*$db = mysqli_connect('localhost', 'root', '', 'registration');*/
$link=mysqli_connect("localhost", "root","");
mysqli_select_db($link,"registration");

/*if (isset($_POST['register'])) {
  $firstname = mysqli_real_escape_string(@link, $_POST['firstname']);
  $lastname = mysqli_real_escape_string(@link, $_POST['lastname']);
  $username = mysqli_real_escape_string(@link, $_POST['username']);
  $email = mysqli_real_escape_string(@link, $_POST['email']);
  $password_1 = mysqli_real_escape_string(@link, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string(@link, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  $user_check_query = "SELECT username FROM users ='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query(@link, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, firstname, lastname, email, password) 
  			  VALUES('$username', '$firstname', '$lastname', '$email', '$password')";
  	mysqli_query(@link, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string(@link, $_POST['username']);
    $password = mysqli_real_escape_string(@link, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $query = "SELECT username FROM users ='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
 }
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
  }*/
?>