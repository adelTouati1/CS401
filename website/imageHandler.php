<?php


$email = $_POST['email'];
$location = $_POST['location'];
$cameraBrand = $_POST['cameraBrand'];
$lenseSize = $_POST['lenseSize'];
$focus = $_POST['focus'];


//conn
$conn = new mysqli('localhost','root','','','photographyZone');
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}else{
   $stmt = $conn->prepare("insert into images(email, location, cameraBrand, lenseSize, focus) values(?, ?, ?, ?, ?)");
   $stmt->bind_param("sssss",$mail, $location, $cameraBrand, $lenseSize, $focus);
   $stmt->execute();
   echo "Sign up Successful ...";
   $stmt->close();
   $conn->close();
}
?>