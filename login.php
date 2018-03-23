<?php require 'login_page.php';?>
<html>
<title>
www.DEVOUR.com
</title>
<head>
<style>
nav {
    float: left;
    max-width:100%;
    margin-left:5em;
    padding: 1em;
}
article {
    margin-left: 50%;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/sty.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="mainpage.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>

</head>
<body>

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
					<li><a href="http://localhost/website/register.php">Register</a> </li> |
					<li><a href="help.html">Help</a></li>
					<div class="clearfix"></div>
				</ul>
			</div>
        </div>
    </div>
</div>
<nav>
	<h1>Already have an account?Login</h1>
	<br><br><br>
	<form method="post" role="form" name="login" onSubmit="return formValidation();">  	
	    <div class="media-body">
			<div class="form-group">
	      		<label for="uname">User Name:</label>
	      		<input type="text" class="form-control" id="uname" placeholder="Enter your first name" name="uname">
	    	</div>
	    	<div class="form-group">
	      		<label for="pwd">Password:</label>
	      		<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
	    	</div>
			<input type="submit" name="submitform" value="Submit" class="btn btn-success">
		</div>
	</form>
</nav>

<article>
<br><br><br>
	<h1>New User? Please register with us !</h1>
	<p>Gives you an access to various special offers and discounts meant only for you on your email id</p> 
	<br><br><br>
	<div class="container">
		<a href="http://localhost/website/register.php" class="btn btn-info" role="button">Create an account </a>
	</div>
	<br><br><br><br><br><br>
	<br><br><br>
</article>
<br><br><br>
				
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
<script>
	function formValidation()  	{  
	var uname = document.login.uname; 
	var pwd = document.login.pwd;   

	if(allLetter(uname))  	{  
		if(passid_validation(pwd,5,12))  {  
			return true;
		}  
	} 
	else	{ 
	alert("please fill details");
	return false;
	}    
}

function allLetter(uname)  	{   
	var letters = /^[A-Za-z]+$/;  
	if(uname.value.match(letters))  	{  
		return true;  
	}  
	else 	{  
		alert('Username must have alphabet characters only');  
		uname.focus();  
		return false;  
	}  
}  

function passid_validation(pwd,mx,my)  {  
	var passid_len = pwd.value.length;  
	if (passid_len == 0 ||passid_len >= my || passid_len < mx)  	{  
		alert("Password should not be empty / length be between "+mx+" to "+my);  
		pwd.focus();  
		return false;  
	}  
	return true;  
}  
</script>
</body>
</html>


