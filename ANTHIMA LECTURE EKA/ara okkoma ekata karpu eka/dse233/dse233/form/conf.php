<?php 
$serverName = "localhost";
$userName = "dbuser";
$password = "dbpass";
$dbName = "dse233";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Successfully Connected";

?>