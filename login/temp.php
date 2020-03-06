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
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      echo "No account with this email";
     } else {
        $db = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
        $sql = "SELECT email FROM register WHERE email = $email";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       // $active = $row['active'];
        
        
        
        // If result matched $myusername and $mypassword, table row must be 1 row
          
        if($row["password"]==$password) {
            
            echo "login sucess";
           
        }else {
           echo "Password incorrect";
        }

     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>

