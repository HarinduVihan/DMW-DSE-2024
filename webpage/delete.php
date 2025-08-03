<?php

include "config.php";

if(isset($_GET['server'])){
    $server = $_GET['server'];

    $sql = "DELETE FROM server WHERE server='$server'";

        $result = mysqli_query($conn, $sql);

        if($result == TRUE) {
            echo "Record deleted Successfully";
        }
        else{
            echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        }
}
?>