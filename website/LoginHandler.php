<?php

$email = $_POST['email'];
$password = $_POST['password'];

//conn
$conn = new mysqli('localhost','root','','','photographyZone');
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}else{
   $stmt = $conn->prepare("insert into userLogIn(email, password) values(?, ?)");
   $stmt->bind_param("ss",$email,$password);
   $stmt->execute();
   echo "Sign up Successful ...";
   $stmt->close();
   $conn->close();
}
?>