<?php 
include 'conf.php';

$sql = "SELECT * FROM userinfo";
$Result = mysqli_query($conn,$sql);

echo '<table border ="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Contact Number</td>
        <td>Email</td>
        <td>Address</td>
        <td>Action</td>
    </tr>';
if(mysqli_num_rows($Result)>0){
    while($row = mysqli_fetch_assoc($Result)){
        $id =$row["id"];
        $name =$row["name"];
        $contact =$row["contact"];
        $email =$row["email"];
        $address =$row["address"];
    echo'<tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$contact.'</td>
            <td>'.$email.'</td>
            <td>'.$address.'</td>
            <td><a href="delete.php?id='.$id.'">Delete<a/> 
            | <a href="update.php?id='.$id.'">Edit<a/></td>
        </tr>';
    }
}
?>