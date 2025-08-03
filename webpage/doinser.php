<?php

include "config.php"
if(isset($_POST['submit'])){
    $server = $_POST['txtserver'];
    $domain = $_POST['txtdomain'];
    $dns = $_POST['txtdns'];

    $sql = "INSERT INTO server (server, domain, date) VALUES ('$server','$domain','$dns')";

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
