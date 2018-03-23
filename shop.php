
<!DOCTYPE html>
<html lang="en">
<title>
www.DEVOUR.com
</title>
<head>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/sty.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="mainpage.css" type="text/CSS">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
 <meta charset="UTF-8">
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
												<li><a href="http://localhost/website/register.php">Register</a> </li> |
						<li><a href="help.html">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
            </div>
        </div>
        <div class="pull-right"><img src="luxury.jpg" height="450px" width="800px"/></div>
        <br><br><br><br>
    
    <form method="post" action="http://localhost/website/cash.php">


        <div class="media-body">
            <div class="form-group">
                <ul class="list-group">
                      <li class="list-group-item">Paneer</li>
                      <li class="list-group-item">kofta</li>
                        <li class="list-group-item">curry</li>
                </ul>
                
            </div>
            <label for="fname">First Name:</label>
            <input type="fname" class="form-control" id="iname" placeholder="Enter item name" name="iname" >
        </div>

        <ul id="dynamic-list"></ul>

        <button onclick="addItem()" name="+">add item</button>
        <button onclick="removeItem()" name="-">remove item</button>        <br><br><br><br>
        	<input type="submit" value="Submit" name="submit" class="btn btn-success">
	</form>
    <script src="shop.js"></script>
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if (isset($_POST["submit"])) {
    echo "GAvayayaya";
    $link = mysqli_connect("localhost", "root", "", "indian");
    // Check connection
    if($link == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    print_r($_POST);
    $user = $_POST['iname'];

    $sql="SELECT * FROM indian WHERE name='$user';";
    $result=mysqli_query($link,$sql);
    //echo $result;
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // If result matched $username and $password, table row must be 1 row
    if($count>=1)
    {
            //echo "Login Successful";
            header("Location: ind.html");
            //return true;
        }
        else {
            //echo "Login unsuccessful";
            header("Location: login.php");
        }
    mysqli_close($link);
}
?>
</body>
</html>
