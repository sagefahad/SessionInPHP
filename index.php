<?php
if(isset($_COOKIE['UserName']) and isset($_COOKIE['Password'])){
	$user = $_COOKIE['UserName'];
	$pass = $_COOKIE['Password'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Authentication</title>
</head>
<body>
	<form name="frmName" action="Welcome.php" method="POST" >
		<h1>LogIn Form</h1>
		<input type="text" name="txtUserName" placeholder="Enter User Name" value="<?php echo $user; ?>">
		<br>
		<br>
		<input type="password" name="txtPassword" placeholder="Enter Your Password" value="<?php echo $pass; ?>">
		<br>
		<br>
		<input type="checkbox" name="RememberMe"> Rememeber Me
		<br>
		<br>
		<input type="submit" name="btnSubmit" value="Submit">
	</form>
</body>
</html>