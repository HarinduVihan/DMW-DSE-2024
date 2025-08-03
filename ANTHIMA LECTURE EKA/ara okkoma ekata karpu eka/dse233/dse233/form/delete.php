<?php 
include 'conf.php';
$userID = $_GET['id'];

$sql = "DELETE FROM userinfo WHERE id='$userID '";

$result = mysqli_query($conn,$sql);

if ($result == TRUE){
    echo "New record deleted successfully.";
  }
  else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      } 

?>