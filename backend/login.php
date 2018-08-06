<?php session_start();

	require_once('../dbconnect.php');

	$username = mysqli_escape_string($conn,$_POST['username']);
	$password = mysqli_escape_string($conn,$_POST['password']);

	$query = "SELECT * FROM users WHERE username='$username';";
	$result = mysqli_query($conn, $query);

  	$data = mysqli_fetch_assoc($result);

  	//echo "username : ".$username;
  	//echo "password : ".$password;


  if(($data['password']==$password) && isset($username) && isset($password) && strlen($username)>1 && strlen($password)>1)
  {
    $_SESSION['userid'] = $data['user_id'];
    $_SESSION['firstname'] = $data['first_name'];
    $_SESSION['lastname'] = $data['last_name'];
    $_SESSION['house'] = $data['house'];
    $_SESSION['schoolid'] = $data['schoolid'];
    $_SESSION['access'] = $data['access_level'];

    header('Location: ../signedin.php');
  }else {
    header('Location: ../blog.php?error');
  }

 ?>
