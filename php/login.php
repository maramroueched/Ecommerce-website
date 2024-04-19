<?php
require('connexion.php');
if(isset($_POST['sub'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $req = "SELECT * FROM `data` WHERE `Email`=:email AND `Password`=:password";
    // Prepare the statement
    $stmt = $con->prepare($req);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    // Execute the query
    $stmt->execute();
    // Fetch the number of rows
    $rowCount = $stmt->rowCount();
    if($rowCount > 0) {
        header('Location: ../special beauty.html');
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Username or password does not exist!")';
        echo '</script>';
    }
}
?>
