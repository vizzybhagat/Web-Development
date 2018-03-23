<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if (isset($_POST["submitform"])) {
	echo "GAvayayaya";
	$link = mysqli_connect("localhost", "root", "", "testdb");
	// Check connection
	if($link == false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	print_r($_POST);
	$user = $_POST['uname'];
	$pass = $_POST['pwd'];
	$_SESSION["username"] = $user;
	$sql="SELECT * FROM `test` WHERE `first`='$user' and `password`='$pass';";
	$result=mysqli_query($link,$sql);
	//echo $result;
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);
	// If result matched $username and $password, table row must be 1 row
	if($count>=1){
	        //echo "Login Successful";
			
	        header("Location: user.html");
			//return true;
	    }
	    else {
	    			//alert('Please enter valid username or password');  

	        header("Location: login.php");
	    }
	mysqli_close($link);
}
?>