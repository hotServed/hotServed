<?php
$username = $_POST['upusername'];
$password = $_POST['uppassword'];
$email = $_POST['upemail'];
$adress = $_POST['upadress'];
if (!empty($username) || !empty($password) || !empty($email) || !empty($adress)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hotserved";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      
      echo "No Such Account";
     } else {
        $INSERT = "DELETE form register where email = $email; INSERT Into register (username, password, type, email, adress) values(?, ?, ?, ?, ?)";
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssss", $username, $password, $type, $email, $adress);
        $stmt->execute();
        echo "Updated sucessfully";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required for now";
 die();
}
?>

