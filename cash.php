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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	
</head>
<body >

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
						<li><a href="user.html">Home</a>  </li> |
						<li><a href="help.html">Help</a></li> 	|
						<li><form method="get" action="ind.html"><button type="submit">Logout</button></form></li>

						<div class="clearfix"></div>
					</ul>
				</div>
            </div>
        </div>

<nav>
<div class="container">
<form method="post" >
	<div class="col-md-12">
			<h1>Please enter your address:</h1>
			<br>
			<label for="add"></label>
			<input type="text" class="form-control" name="add"> 
<br>
<input type="submit" value="Submit" name="submit" class="btn btn-success">
</form>

<?php
$names=array("Manoj tiwari","Rakesh sharma","Mukesh Patel","Lokesh Wadhwa","Mahi Depp");
$count=0;
if (isset($_POST["submit"]))	
{
	$count=mt_rand(0,4);

                          $link = mysqli_connect("localhost", "root", "", "customer");
                       
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            
                            $qty6 = mysqli_real_escape_string($link, $_REQUEST['add']);
                            $sql = "INSERT INTO customer (address,name) VALUES ('$qty6','$names[$count]')";
                            if(mysqli_query($link, $sql))
                            {
                               
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
 
	echo '<div class="pull-right"><img src="deliver.png" height="350px" width="600px"/></div>
			<h3>
				Your delivery for the above address will be given by </h3>';
				echo $names[$count] ;
				echo'<br>
				<h3>Mobile no. is 9897969594<br>
				We guarantee you that your ordered food will be reaching within 20 minutes<br>
			</h3>
			<h1>
				We hope you enjoy our service!<br>
			</h1>';
}
?>
</div>
</nav>