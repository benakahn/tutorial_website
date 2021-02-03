<!DOCTYPE html>
<html>
<head>
 <title>LOGIN AND REGISTRATION FORM</title>
  <link rel = "icon" href = "images/e.jpg" type = "image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	body{
	 /*background-image: url("images/pic3.jpg");
          background-repeat:no-repeat;
          background-size:100%;*/
          background-color: lightblue;
         

	}
	
	.registerbox{
		width: 250px;
		height:400px;
		background: black;
		color: #fff;
		top: 60%;
		left: 50%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 70px 30px;
	}
	.avatar{
		width: 100px;
		height: 100px;
		border-radius: 50%;
		position: absolute;
		top: -50px;
		left: calc(50% - 50px);
	}
	.registerloginbox label{
		margin: 0;
		padding: 0;
		font-weight: bold;
	}
	.registerbox input[type="email"],input[type="text"], input[type="password"]{
		width: 100%;
	margin-bottom: 10px;
		border: none;
		border-bottom:1px solid black;
		background: transparent;
		outline: none;
		height: 40px;
		color: #fff;
	}
	.registerbox input[type="submit"]{
		border: none;
		outline: none;
		height: 20px;
		background: #03b6fc;
		border-radius: 20px;
		font-size: 18px;
		padding: 5px 10px 6px 10px;
		width: 80px;
		height: 25px;
		color: white;
		margin-left: 60px;
	} 

	.registerbox input[type="submit"]:hover{
		cursor: pointer;
		background: #ddd;
		color: black;
	}
	footer{
	
	}
	footer a:visited{
		color : red;
	}
	footer a:hover{
		color: yellow;
	}
	footer a{
		text-decoration: none;

	}
	.registerbox a{
		text-decoration: none;
		color: #03b6fc;
	}

@media only screen and (max-width: 320px){
	body{
		background-size: auto;
	}
}

</style>
</head>
<body><div>
	<footer>
<a href="index.php" style=" font-size: 30px; float: right;">Back</a>
<b style="font-size: 20px, background-color : red;">click here for</b>
<a href="adminlogin.php" style=" font-size: 20px;">Admin Login</a></footer></div>

</div>


<div class="registerbox">
		<img src="images/avatar.jpg" class="avatar">
<form action="" method="post">
	
	<label>Name</label><br>
	<input type="text" name="name" placeholder="Enter Name" required=""><br><br>
	<label>Email</label><br>
	<input type="email" name="email" placeholder="Enter Mail Address" required=""><br><br>
	<label>Password</label><br>
	<input type="Password" name="psw" placeholder="Enter Password" required=""><br>

	<input type="submit" name="signup" value="Sign Up"><br><br>
	Click here for <a href="newlogreg.php">Login</a>
<?php
include('conn.php');
if (isset($_POST['signup'])) {
	# code...
	$name = $_POST['name'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	$hashpsw = md5($psw);
	$sql = "INSERT INTO logreg (email, psw, name) VALUES ('$email', '$hashpsw', '$name')";
   
    
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
  
    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('New record created successfully')</script>";
    header("Location : newlogreg.phh");
     
      } else {
    echo "<script>alert('User already Exsist')</script>";
    header("Location : ".newlogreg.php);
    }
    mysqli_close($conn);

}

?>
</form>
</div>

	
</body>
</html>

