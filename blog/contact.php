<!DOCTYPE html>
<html>
<head>
	<title>Sign In Example</title>
	<link rel="stylesheet" type="text/css" href="css/page.css">
</head>
<body>

<ul class="navi">
     <li><a href="#">Home</a></li>
     <li><a href="#">Home</a></li>
     <li><a href="#">Home</a></li>
     <li><a href="#">Home</a></li>
   </ul>
<?php
  if(isset($_POST['submit'])){
  	include("database.php");

  	$email = $_POST["email"];
  	$password = $_POST["password"];
  	$query = "select *from register; where email = '$email' and password = '$password'";
    $result = mysql_query($query);
    $check = mysql_num_rows($result);
    if($check > 0){
    	echo "Username & Password Match";
    }else{
    	echo "Username & Password not Match";
    }
	
  }
?>
<form action="login.php" method="post">
	<label>Email</label>
	<input type="text" name="email">
	<label>Password</label>
	<input type="password" name="password">
	<input type="submit" name="submit" value="Log In">
</form>

</body>
</html>