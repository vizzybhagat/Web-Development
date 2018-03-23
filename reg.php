<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "testdb");
 
// Check connection
if($link === false){
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
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
} 
// close connection
mysqli_close($link);
?>

<?php
require_once 'Connection.php';
?>