<?php
 if (!isset($_SESSION['username'])) {
      session_start();
	$_SESSION['loggedin'] = "false";
}
if($_SESSION['loggedin'] != "true"){
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
    $_SESSION['loggedin'] = "true";
    $_SESSION['username'] = $username;
// header("location: home.html");
}
else {
    $error = "Your Login Name or Password is invalid!! $username";

    $_SESSION['loggedin'] = "false";

    header("location: home.html");
}
}
else {

    header("location: find.php");
}

 ?>
<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
<title>Lisa's Botique</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
<link href="css/custom[1].css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
function validateForm() {
    var firstName = document.forms["myForm"]["fname"].value;
    if (firstName == "") {
       // alert("First Name Must Be filled");
		document.getElementById("demo1").innerHTML = "First Name Missing";
    }
	else{
	document.getElementById("demo1").innerHTML = "";
	}
	
	var LastName = document.forms["myForm"]["lname"].value;
    if (LastName == "") {
		document.getElementById("demo2").innerHTML = "Last Name Missing";
    }
	else{
	document.getElementById("demo2").innerHTML = "";
	}
	var MobileNumber = document.forms["myForm"]["mobile"].value;
    if (MobileNumber == "") {
		document.getElementById("demo3").innerHTML = "Mobile Number Missing";
    }
	else{
	document.getElementById("demo3").innerHTML = "";
	}	
	var HomeNumber = document.forms["myForm"]["home"].value;
    if (HomeNumber == "") {
		document.getElementById("demo4").innerHTML = "Home Number Missing";
    }	
	else{
	document.getElementById("demo4").innerHTML = "";
	}
	if(firstName != "" && LastName != "" && MobileNumber != "" && HomeNumber != "")
	{
	document.getElementById("demo").innerHTML = " Input Accepted";
	}
	}
	
	$(document).ready(function(){   
$("#srchForm").load("./searchform.html");
});

</script>
</head> 
<body> 

<div id="page" data-role="page" data-theme="b">
  <div data-role="content">
    <ul data-role="listview" data-theme="c">
    
    </ul>
	 
  </div>
	 <li><p> Welcome <?php   echo $_SESSION['username'];  ?> </p> </li>
	<div data-role="header" data-theme="b">
	  <div class="logo"><img src="img/LOGO.png" width="200" height="200" alt=""/>
  </div>
	</div>
	<div data-role="content">	
		<ul data-role="listview" data-theme="c">
			<li><a href="#section1">About Us</a></li>
			<li><a href="#section3">Locations</a></li>
			<li><a href="#section4">Designs</a></li>
			<li><a href="#section6">Contact Us</a></li>
		</ul>	
		  
	</div>
	<div data-role="header" data-theme="b">
		
		<a href="find.php" style="color:black">Back</a> 
				<a href="logout.php" style="color:black">Logout</a>  
	</div>
	<div data-role="footer"  style=" bottom:0;" data-theme="b">
	  <h4>lisa's Boutique &copy; 2017</h4>
	</div>
</div>

<div id="section1" data-role="page" data-theme="b">
	<li><p> Welcome <?php   echo $_SESSION['username'];  ?> </p> </li>
	<div data-role="header" data-theme="b">
	  <h1>About Us</h1>
		<a href="find.php" style="color:black">Back</a>  
		<a href="logout.php" style="color:black">Logout</a>  
	</div>
	<div data-role="content">
	  <h3>Boutique History</h3>
	  <p> Lisa's Boutique is your go-to Online Womens Clothing boutique. Our Online Boutique is the place for dressing up your wardrobe with our affordable prices! Whether you’re interested in a fun romper for a day on the beach, a frilly fit and flare dress for the perfect date night, the ultimate little black dress to impress and show off your figure, matching accessories to make your ensemble sparkle, or simple fashion advice to help you look and feel your best at all times, you can rest assured that we have your back. Let our team of creative, fashion-forward women who love all things fashion serve you by providing you with the finest curated collections of boutique fashion. Lotus Online Boutique has become one of the # 1 online boutiques with fashion inspiring style. We want to be the go to online clothing boutique for women from all walks of life. Go on. Have fun, let go, and don’t forget to spoil yourself every once in a while.</p>
	 	</div>
	
	<div data-role="footer"  style=" bottom:0;" data-theme="b">
  <div class="logo"><img src="img/LOGO.png" width="200" height="200" alt=""/>
		
	  <h4>lisa's Boutique &copy; 2017</h4>
	</div>
</div>
 </div>

<div id="section3" data-role="page" data-theme="b">
	<div data-role="header" data-theme="b">
		<h1>Locations</h1>
		<a href="find.php" style="color:black">Back</a> 
				<a href="logout.php" style="color:black">Logout</a>  
	</div>
	<div data-role="content">	
	  <h3>Minnesota</h3>
	  <p></p>
	  <h3>Illinois</h3>
	  <p></p>
      </div>
	<div data-role="footer" style=" bottom:0;" data-theme="b">
<div class="logo"><img src="img/LOGO.png" width="200" height="200" alt=""/>
	   <h4>lisa's Boutique &copy; 2017</h4>
	</div>
</div>
 </div>

<div id="section4" data-role="page" data-theme="b">
	<div data-role="header" data-theme="b">
		<h4>Lisa's Designs</h4>
		<a href="find.php" style="color:black">Back</a> 
				<a href="logout.php" style="color:black">Logout</a>  
	<div data-role="content">	
		<img src="img/image1.jpg" alt="Paris" style="width:40%">&nbsp &nbsp &nbsp
		<img src="img/image2.jpg" alt="Paris" style="width:40%"></br>
		<img src="img/image3.jpg" alt="Paris" style="width:40%">
		</div>
<form name="myForm" action="#" onsubmit="validateForm()" method="post">
<p id="demo" style="color:green"></p>
<p id="demo1" style="color:red"></p>
	<p>    First Nmame :     <input type="text" name="fname" placeholder="First Name" id="fname" > </p>
	<p id="demo2" style="color:red"></p>
		<p>    Last Nmame :     <input type="text" name="lname" placeholder="Last Name" id="lname" > </p>
<p> Country : 
<select name="Country" id="countryName">
<option value="USA">USA</option>
  <option value="IND">IND</option>
  <option value="ENG">ENG</option>
  <option value="AUS">AUS</option>
</select></p>
<p id="demo3" style="color:red"></p>
<p>Mobile Number :     <input type="text" name="MobileNumber" placeholder="Mobile #" id="mobile" > </p> 
<p id="demo4" style="color:red"></p>
	<p>Home Number :     <input type="text" name="HomeNumber" placeholder="Home #" id="home" > </p> 
<p>Contact Via :
<label><input type="checkbox" id="emailcheck" value="first_checkbox"> Home </label>
<label><input type="checkbox" id="mobilecheck" value="first_checkbox"> Mobile </label>
	</p>
<br>
    <input type="submit" value="Submit" onClick="validateForm()">
</form>	
	</div>
	<div data-role="footer" style=" bottom:0;" data-theme="b">
<div class="logo"><img src="img/LOGO.png" width="200" height="200" alt=""/>
	   <h4>lisa's Boutique &copy; 2017</h4>
	</div>
	</div>
	 </div>
<div id="section5" data-role="page" data-theme="b">
	
	<div data-role="header" data-theme="b">
<h1>
	Search
		</h1>	
		<a href="find.php" style="color:black">Back</a> 
				<a href="logout.php" style="color:black">Logout</a>  
		</div>
		
				<div data-role="content">

		               <form method="post" action="find.php">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                     
                     <tr>
                        <td width="100">First Name</td>
						<td><input name="fname" type="text" id="fname"></td>
                     </tr>
					   <tr>
					   <td width="100">Last Name</td>
                        <td><input name="lname" type="text" id="lname"></td>
                     </tr>
                        <td>
                           <input name="find" type="submit" id="add" value="Search">
                        </td>
                     </tr>

                  </table>
               </form>
	</div>
	<div data-role="footer" style=" bottom:0;" data-theme="b">
<div class="logo"><img src="img/LOGO.png" width="200" height="200" alt=""/>
	   <h4>lisa's Boutique &copy; 2017</h4>
	</div>
	</div>
</div>
<div data-role="page" id="section6" data-theme="b">
	<div data-role="header" data-theme="b">
		<h1>Contact Us</h1>
		<a href="find.php" style="color:black">Back</a> 
				<a href="logout.php" style="color:black">Logout</a>  
	</div>
  <div data-role="content">	
<h4> Contact Via : </h4>
<form action="#">
	<p>    Email :     <input type="text" name="Email" value="Email"> </p>
<p> Country : 
<select name="Country" id="countryName">
  <option value="USA">USA</option>
  <option value="IND">IND</option>
  <option value="ENG">ENG</option>
  <option value="AUS">AUS</option>
</select></p>
<p>Mobilde Number :     <input type="text" name="lastname" value="Mobile #"> </p> 
<p>Contact Via :
<label><input type="checkbox" id="emailcheck" value="first_checkbox"> Email </label>
<label><input type="checkbox" id="mobilecheck" value="first_checkbox"> Mobile </label>
	</p>
<br>
    <input type="submit" value="Submit">
</form>	
	</div>
	<div data-role="footer"  style=" bottom:0;" data-theme="b">
 <div class="logo"><img src="img/LOGO.png" width="200" height="200" alt=""/>

		<h4>lisa's Boutique &copy; 2017</h4>
	</div>
</div>
</div>


</body>
</html>



