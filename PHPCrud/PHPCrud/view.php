<?php 
include "conf.php";
$sql = "SELECT * FROM user_details";
$result = mysqli_query($conn, $sql);

echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td>ID</td> 
          <td>First Name</td> 
          <td>Last Name</td> 
          <td>MobileNumber</td> 
          <td>Birthday</td> 
      </tr>';

      if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["Id"];
            $firstname = $row["FirstName"];
            $lastname = $row["LastName"];
            $tel = $row["MobileNumber"];
            $dob = $row["Birthday"];
    
 echo '<tr> 
            <td>'.$id.'</td> 
            <td>'.$firstname.'</td> 
            <td>'.$lastname.'</td> 
            <td>'.$tel.'</td> 
            <td>'.$dob.'</td> 
        </tr>';
    }
} 
?>