<?php
$password = $_POST['logpassword'];
$email = $_POST['logemail'];
if (!empty($email) || !empty($password)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hotserved";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? and password = ? Limit 1";
     
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("ss", $email,$password);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      echo "Invalid Credentials";
     } else {
        echo "Valid Credentials";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>

