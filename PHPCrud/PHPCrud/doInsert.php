<?php

include "conf.php";
if(isset($_POST['submit'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['contactno'];
$dob = $_POST['dob'];

$sql = "INSERT INTO user_details (FirstName, LastName, MobileNumber, Birthday) 
VALUES ('$fname', '$lname', '$mobile', '$dob')";

if(mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else {
    echo "No Data received";
}
mysqli_close($conn);
?>