<?php 

$host="localhost";
$user="root";
$password="";
$dbname="account";
$conn = new mysqli ($host, $user, $password, $dbname);
if(!$conn){
    die('could connect' .mysql_error());
}

if(isset($_POST['email1'])){
    $email1=$_POST['email1'];
    $pass=$_POST['pass'];
    
    $sql="select * from signup where email='".$email1."'AND pass='".$pass."' Limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
      $name=mysqli_fetch_assoc($result)["name"];
        echo json_encode(["result"=>1,"email"=>$email1,"name"=>$name]);
    }
    else{
      
        echo json_encode(["result"=>0]);
    }
        
}
?>