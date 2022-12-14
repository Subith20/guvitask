<?php

$name = ($_POST['name']);
$email  = ($_POST['email']);
$pass = ($_POST['pass']);
$num = ($_POST['num']);
if (!empty($name) && !empty($email) && !empty($pass) && !empty($num)) 
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "account";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From signup Where email = ? Limit 1";
  $INSERT = "INSERT Into signup (name , email ,pass, num )values(?,?,?,?)";
  
//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      
      $stmt->bind_param("sssi", $name,$email,$pass,$num);
      $stmt->execute();
      echo json_encode(["result"=>1,"email"=>$email,"name"=>$name]);
     } else {
      echo json_encode(["result"=>2]);
     }
     $stmt->close();
     $conn->close();
    }
  }
else {
 
 echo json_encode(["result"=>0]);
 
}
?>