<?php 
include "conf.php";

$sql = "SELECT * FROM user_details";
$result = mysqli_query($conn, $sql);

echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>users</h2>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>MobileNumber</th>
                    <th>Birthday</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody> 
HTML;

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo <<<HTML
            <tr>
                <td>{$row['Id']}</td>
                <td>{$row['FirstName']}</td>
                <td>{$row['LastName']}</td>
                <td>{$row['MobileNumber']}</td>
                <td>{$row['Birthday']}</td>
                <td>
                    <a class="btn btn-info" href="update.php?id={$row['Id']}">Edit</a>&nbsp;
                    <a class="btn btn-danger" href="delete.php?id={$row['Id']}">Delete</a>
                </td>
            </tr>
HTML;
    }
}

echo <<<HTML
            </tbody>
        </table>
    </div> 
</body>
</html>
HTML;
?>
