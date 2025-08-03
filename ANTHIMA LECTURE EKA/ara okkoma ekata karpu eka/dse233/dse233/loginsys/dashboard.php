<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "You must log in first! <a href='login.php'>Login here</a>";
    exit();
}

echo '
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome : '.$_SESSION["username"].'</h1>
	<h2>Welcome :You have successfully authenticated !</h2>
    <a href="logout.php">Logout</a>
</body>
</html>';
?>
