<?php 
include "conf.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM user_details WHERE Id = $id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $firstname = $row["FirstName"];
        $lastname = $row["LastName"];
        $tel = $row["MobileNumber"];
        $dob = $row["Birthday"];
	}

if(isset($_POST['submit'])) {

    $new_firstname = $_POST['firstname'];
    $new_lastname = $_POST['lastname'];
    $new_tel = $_POST['tel'];
    $new_dob = $_POST['dob'];

    $update_sql = "UPDATE user_details SET FirstName = '$new_firstname', LastName = '$new_lastname', MobileNumber = '$new_tel', Birthday = '$new_dob' WHERE Id = $id";
	
    if(mysqli_query($conn, $update_sql)) {
		header("Location: view2.php");

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
        First Name:<input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>"><br>
        Last Name:<input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>"><br>
        Mobile Number:<input type="tel" id="tel" name="tel" value="<?php echo $tel; ?>"><br>
        Birthday: <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>"><br><br>     
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
