<html>
<title>
www.DEVOUR.com
</title>
<head>
	
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/sty.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="mainpage.css" type="text/CSS">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>

<script src="reg.js"></script>

</head>
<body onload="document.register.fname.focus();">
    <div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="img/header.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="queries">
					<p>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label></p>
				</div>
                <div class="clearfix"></div>
            </div>
               
			</div>

<div class="menu-bar">
			<div class="container">
                
            <div class="login-section">
					<ul>
						<li><a href="ind.html">Home</a>  </li> |
						<li><a href="login.php">Login</a> </li> |
						<li><a href="help.html">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
            </div>
        </div>
<div class="container">
  <div class="jumbotron">
    <h1>Register Now!</h1> 
    <p>Gives you an access to various special offers and discounts meant only for you on your email id</p> 
  </div>
</div>

<form method="post" role="form" action="register.php" name='register' onSubmit="return formValidation();">  
<div class="container">
 
	<div class="media">
    <div class="media-left media-top">
	
      <img src="order.jpg" class="media-object" style="height: 600px width:600px" align="right"/>
    </div>


    <div class="media-body">
	<div class="form-group">
      <label for="fname">First Name:</label>
      <input type="fname" class="form-control" id="fname" placeholder="Enter first name" name="fname" >
    </div>
    
<div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="lname" class="form-control" id="lname" placeholder="Enter last name" name="lname">
    </div>

    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-success" name="submitform">Submit</button>

<button type="reset" class="btn btn-success">Reset</button>

  </form>

</div>
<br><br><br><br><br>
<div class="service-section-bottom-row">
				<div class="container">
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="img/icon1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>100% Service Guarantee</h4>
							<p>Food services at your doorstep. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="img/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Fully Secure Payment</h4>
							<p>Various Payment methods available. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="img/icon3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Track Your Order</h4>
							<p>Know where your food has reached. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
<?php

error_reporting(0);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "testdb");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);

$last_name = mysqli_real_escape_string($link, $_REQUEST['lname']);

$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$pass = mysqli_real_escape_string($link, $_REQUEST['pwd']);

// attempt insert query execution
$sql = "INSERT INTO test (first, last, email, password) VALUES ('$first_name', '$last_name', '$email', '$pass')";


if(mysqli_query($link, $sql)){
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
} 
if (isset($_POST['submitform']))
    {   
    ?>
<script type="text/javascript">
window.location = "login.php";
</script>      
    <?php
    }
// close connection
mysqli_close($link);
?>


</body>
</html>

