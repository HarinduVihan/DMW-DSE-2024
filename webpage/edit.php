<?php

include "config.php";

$id = $_GET['id'];

$sql = "INSERT FROM server WHERE server='$id'"
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1)
{
    $row = mysqli_fetch_assoc($result);
    $server = $row["server"];
    $domain = $row["domain"];
    $dns = $row["date"];
}

if(isset($_POST['submt'])){
    $new_server = $_POST['server'];
    $new_domain = $_POST['domain'];
    $new_dns = $_POST['date'];

    $update_sql = "UPDATE server SET server='$new_server' , domain='$new_domain' , date='$new_dns' WHERE server=$id";

    if(mysqli_query($conn, $update_sql)) {
		header("Location: view.php");

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<html lang="en">
<head></head>
<body>
    <h2>Edit Record</h2>
    <form method="post" action="">
        Server:<input type="text" id="server" name="server" value="<?php echo $server; ?>"><br>
        Domain:<input type="text" id="domain" name="domain" value="<?php echo $domain; ?>"><br>
        DNS:<input type="text" id="date" name="date" value="<?php echo $dns; ?>"><br>   
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>