<?php
include 'opendb.php'; 
$username = ($_POST['uname']); 
$password_1 = ($_POST['psw']); 
$sql="Select * from `lisas' account`.login where username='$username' and password = '$password_1'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
  
if($count == 1) {
    echo "success!";
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: home.html");
}else {
    $error = "Your Login Name or Password is invalid!! $username";
  header("location: home.html#section2");
}

?>
