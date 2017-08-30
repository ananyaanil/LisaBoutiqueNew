?php // REGISTER USER include_once('opendb.php'); 
$username = ($_POST['uname']); $password_1 = ($_POST['psw']); 
$tsql="SELECT * FROM login WHERE username='$username'"; 
$result=sqlsrv_query($conn,$sql); $count=sqlsrv_num_rows($result); 
// If result matched $username and $password, table row must be 1 row if($count==1){ $row = sqlsrv_fetch_array($result); 
if ($password_1)) == $row['password']){ session_register("username"); session_register("password"); 
echo "Login Successful"; <html> <body> <p>LOGIN SUCCESSFUL</p> </body> </html>
echo "<script type='text/javascript'> document.location = 'page1.php'; 
</script>"; exit; return true; } else { echo "Wrong Username or Password";
<html> <head> <title>My Title</title> </head> <body> <p>LOGIN FAILED</p> </body> </html> header(“Location: login.php”); return false; } ?
