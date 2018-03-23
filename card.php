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
        <div class="clearfix">
          
        </div>
      </div>

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
  <form method="post" action="cash.php" onSubmit="return formValidation();">  
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
     
        <button type="submit" class="btn btn-success" name="submitform">Submit</button>

        <button type="reset" class="btn btn-success">Reset</button>
      </div>
    </div>
  </form>
<?php
if (isset($_POST['submitform'])) {
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "carddb");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
// Escape user inputs for security
$card_name = mysqli_real_escape_string($link, $_REQUEST['cname']);

$card_number = mysqli_real_escape_string($link, $_REQUEST['cno']);

$cvcno = mysqli_real_escape_string($link, $_REQUEST['cvc']);


// attempt insert query execution
$sql = "INSERT INTO card  VALUES ('$card_name', '$card_number', '$cvcno')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
} 

// close connection
mysqli_close($link);
}
?>

<script>
  function formValidation()  
{  
var cname = document.card.cname;  
var cno = document.card.cno;  
var cvc = document.card.cvc;  

if(allLetter(cname))  
{  
if(allnumeric(cno))  
{
if(threedigit(cvc))  
{    
  return true;
}   
}  
}     
return false;  
} 

function allLetter(cname)  
{   
var letters = /^[A-Za-z]+$/;  
if(cname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Card name must have alphabet characters only');  
cname.focus();  
return false;  
}  
}  

function allnumeric(cno)  
{   
var numbers = /^[0-9]+$/;  
if(cno.value.match(numbers))  
{  
return true;  
}  
else  
{  
alert('Card number must have numeric characters only');  
cno.focus();  
return false;  
}  
}  
 function threedigit(cvc)
{
var numbers=/^[0-9]+$/;
if(cvc.value.match(numbers))
{
var cvc_len = cvc.value.length;  
if (cvc_len == 0 ||cvc_len >= 3 || cvc_len < 0)  
{  
alert('CVC should not be empty / length should be 3'); 
cvc.focus();   
return false;  
}  
else
{
return true;
}
}


</script>

</body>
</html>