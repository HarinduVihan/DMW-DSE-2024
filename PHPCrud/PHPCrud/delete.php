<?php 
include "conf.php"; 

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
	
    $sql = "DELETE FROM user_details WHERE Id='$user_id'";

     $result = mysqli_query($conn, $sql);
	 
     if ($result == TRUE) {
        echo "Record deleted successfully.";
		
    }else{
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
} 
?>