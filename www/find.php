?php /* // REGISTER USER include_once('opendb.php'); 
$username = ($_POST['uname']); $password_1 = ($_POST['psw']); 
$tsql="Select * from login where username='$username'and password ='$password_1 '"
$result=sqlsrv_query($conn,$tsql);
$count=sqlsrv_num_rows($result); 
// If result matched $username and $password, table row must be 1 row if($count==1){ $row = sqlsrv_fetch_array($result); 
if ($password_1)) == $row['password']){ session_register("username"); session_register("password"); 
<?php header('Location: home.html');?>
echo "Login Successful"; <html> <body> <p>LOGIN SUCCESSFUL</p> </body> </html>

</script>"; exit; return true; } else { echo "Wrong Username or Password";
<html> <head> <title>My Title</title> </head> <body> <p>LOGIN FAILED</p> </body> </html> header(“Location: login.php”); return false; } 
*/ ?>
<?php
//include_once('opendb.php'); 
$username = ($_POST['uname']); 
$password_1 = ($_POST['psw']); 
$tsql="Select * from login where username='$username' and password = '$password_1'";
$result=sqlsrv_query($conn,$tsql);$count=sqlsrv_num_rows($result); 
// If result matched $username and $password, table row must be 1 row
 if($count==1){ 
     $row = sqlsrv_fetch_array($result); 
     
 session_register("username"); 
session_register("password"); 
 //header('Location: home.html');
echo "
     <html> <body> <p>LOGIN SUCCESSFUL</p> </body> </html> "}
     else{
     echo " <html> <body> <p>LOGIN NOT SUCCESSFUL</p> </body> </html>"
     }

?>


