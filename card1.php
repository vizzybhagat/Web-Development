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
<script src="card.js"></script>	
</head>
<body onload="document.card.cname.focus();">

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
												<li><a href="help.html">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
            </div>
        </div>
<form method="post" action="cash.php" name='card' onSubmit="return formValidation();">  
<div class="media-body">
	<div class="form-group">
      <label for="cname">Enter Name on card:</label>
      <input type="cname" class="form-control" id="cname" placeholder="Enter card name" name="cname">
    </div>
    
<div class="form-group">
      <label for="cno">Enter card number:</label>
      <input type="cno" class="form-control" id="cno" placeholder="Enter card number" name="cno">
    </div>

   <div class="form-group">
      <label for="cvc">Enter CVC(3-digit pin behind your card):</label>
      <input type="cvc" class="form-control" id="cvc" placeholder="Enter cvc" name="cvc">
    </div>
 
        <button type="submit" class="btn btn-success">Submit</button>

<button type="reset" class="btn btn-success">Reset</button>
</div>
  </form>

<?php
if (isset($_POST["submitform"])) {
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "carddb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
// Escape user inputs for security
$card_name = mysqli_real_escape_string($link, $_REQUEST['cname']);

$cardno = mysqli_real_escape_string($link, $_REQUEST['cno']);

$cvcno = mysqli_real_escape_string($link, $_REQUEST['cvc']);

// attempt insert query execution
$sql = "INSERT INTO card (name,number,cvc) VALUES ('$card_name', '$cardno', '$cvcno')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
} 
if (isset($_POST['submitform']))
    {   
    ?>
<script type="text/javascript">
window.location = "cash.php";
</script>      
    <?php
    }
// close connection
mysqli_close($link);
}
?>

</body>
</html>