<?php
require('connexion.php');
if(isset($_POST['submit_log'])){
    $FirstName=$_POST['First_name'];
    $LastName=$_POST['Last_name'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $Phone=$_POST['Phone_Number'];
    $req="INSERT INTO `data`(`First_name`,`Last_name`,`Email`,`Password`,`Phone_Number`) VALUES ('$FirstName','$LastName','$email','$password','$Phone')";
    if($con->query($req)){
        header('Location: ../special beauty.html');
    }
}
?>