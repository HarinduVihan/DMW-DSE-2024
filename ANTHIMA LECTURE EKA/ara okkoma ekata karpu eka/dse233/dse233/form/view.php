<?php 
if(isset($_POST['txtName'], $_POST['txtContact'], $_POST['txtEmail'])) {

    $Name = $_POST['txtName'];
    $Contact = $_POST['txtContact'];
    $Email = $_POST['txtEmail'];

    echo $Name;
    echo "<br>";
    echo $Contact;
    echo "<br>";
    echo $Email;

} else {
    echo "Form data is incomplete.";
}
?>
