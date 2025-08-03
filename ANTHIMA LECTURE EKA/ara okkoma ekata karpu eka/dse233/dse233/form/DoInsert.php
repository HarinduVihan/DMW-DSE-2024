<?php 
include 'conf.php';

$Name = $_POST['txtName'];
$Contact = $_POST['txtContact'];
$Email = $_POST['txtEmail'];
$address = $_POST['txtAddress'];

$sql = "INSERT INTO userinfo (name,contact,email,address) 
VALUES ('$Name', $Contact, '$Email','$address')";

$result = mysqli_query($conn,$sql);

if ($result == TRUE) {
    echo "New record created successfully.";
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } 
?>