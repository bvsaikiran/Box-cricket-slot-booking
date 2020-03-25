<?php
	session_start();
	require_once('dbconfig/config.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/home.css">
</head>
<body style="background-color:#bdc3c7">
	

	<div id="main-wrapper">
		<center>
			<h2>Home Page</h2>
			<center><h3>Welcome <?php echo $_SESSION['username']; ?></h3></center>
		
		<img src="images/avatar.png" class="avatar"/>

		</center>


	

<form class="myform" action="home.php" method="post">

<input name ="logout" type="submit" class="logout_btn"  value="Log Out">

</form>

<?php
if(isset($_POST['logout']))
{
session_destroy();
header('location:login.php');
}
else{

}


?>
</div>


</body>
</html>