<?php

define(MyUserName, "admin");
define(MyPassword, "admin");

$user = $_POST['txtUserName'];
$pass = $_POST['txtPassword'];

if($user == MyUserName && $pass == MyPassword){
	
	echo "Welcome $user";
	
	if(isset($_POST['RememberMe'])) {
		setcookie(UserName,$user,time()+86400);
		setcookie(Password,$pass,time()+86400);
	}
	
	session_start();
	$_SESSION['LogInUser'] = $user; ?>

	<br>
	<a href="contacts.php">Contacts</a>
	<br>
	<a href="photos.php">Photos</a>
	<br>
	<a href="logout.php">Logout</a>

<?php } else {
	header('location:index.php');
}


?>