<?php
$conn = new mysqli("localhost","root","","kashmir_db");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $sql="INSERT INTO user (username , email , password ) VALUES ('$username','$email','$password')";
    $conn->query($sql);
    echo"registration successfully! <a href='register.php'>Go Back</a>";
}
$conn->close();
?>