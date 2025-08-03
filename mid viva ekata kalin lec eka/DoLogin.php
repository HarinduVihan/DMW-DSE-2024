<?php
session_start();
include 'conf.php';

$uname=$POST['username'];
$pass=$POST['password'];

$sql="SELECT * FROM users WHERE username ='$uname' AND password = '$pass'";
$result = mysqli_query($conn,$sql)

if(mysqli_num_rows($result)===1){
    $row =mysqli_fetch_assoc($result);
    if($row['username'] === $uname && $row['password']===$pass){
        $_SESSION['username']=$uname;
        echo "<h1> Welcome : ".$_SESSION['username']."</h1>";
        echo "Login Successful! <a href='dashboard.php'>Go to Dashboard</a>";
    }
    else{
        echo "Invalid password.";
    }
    else{
        header("Location: index.html");
        exit();
    }
}
?>