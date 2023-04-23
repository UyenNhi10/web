




<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | News :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<style>
				body {
					background-color: #33CCFF;
				}
			</style>
		
</head>
<body>
<?php require("conncet_1.php")
	
	?>
  <div class="wrap">
	<div class="header" >
		<div class="headertop_desc" >
			<div class="call">
			<p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508 </span></span></p>
			</div>
			<div class="account_desc">
				<ul>
				<li><a href="index.php" style="background-color:#003333;">Home</a></li>
					
					
			
				</ul>
				<style>
				li {
					font-size:28px;
					
				}
			</style>
			</div>
			<div class="clear"></div>
	</div>
		<div class="header_top" style=background-color:#FF9999;>
		<div class="center">
			<video width="400px" height="200px" playsinline autoplay muted loop>
			<source src="images/DONG.mp4" type="video/mp4" >
 			</video>
			 <style>
				.center {
    			 margin: 0 auto;
				 width: 400px;
   		 		display: block
				}
			</style>
			</div>
	</div>	 
		
			 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
			div
		{
			width: auto;
			right:-450px;
			
		}
	</style>
</head>
	</br>
<body>

<?php
	require("conncet 1.php");
?>

<style type="text/css">
		.form-heading
		{
	font-size: 35px;
    color: #668B8B;
    text-align: center;
			
		}
	</style>
<div 
	
style="  width: 150%;">
<div class="section group" style="background-color:#99CCCC;"  >
				<div style="background-color:#DEB887" class="grid_1_of_4 images_1_of_4"  >

	<h1 class="form-heading"> LOGIN </h1> <br/>
					
	<form action='login.php' method='post'style="color:#666699">
	Username:<input type='text' name='username'  /> <br /> <br/>
	Password:<input type='password' name='password' /> <br /> <br/>
		<input type='submit' name='ok' value='Login'  style="background-color:#4A708B;" /> 
		<input type="submit" name="dk" value="Register" style="background-color:#4A708B;" > </a>
	</form>		 
	

<?php
if(isset($_POST["ok"]))
{
	$user = "";
	$pass= "";
	if(empty($_POST["username"]))
	{
		echo "ban chua nhap Username";
		return;
	}
	if (empty($_POST["password"])) 
	{

		echo "ban chua nhap password";
		return;

	}
	$user = $_POST["username"];
	$pass = $_POST["password"];
   //echo ("welcome ".$user."<br/>your password: ".$pass)."<br/>";

	try{
		$sql = "Select * from customer where Username like '{$user}' ";
		$stmt= $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch();
			if (!$result)
			{
				echo "You are not logged in";
				return;
			}
			if($result["Password"]=$pass && $result["IsActive"]=1)
			{
				session_start();
				$_SESSION["suser"]=$user;
				$_SESSION["sname"] =$result["Name"];

				header("Location:result.php");
			}
			else
				echo "Login failed ";
				
		}
	catch(PDOException $e){
		echo "Connection failed ".$e->getMessage();
	}

}
?>
<?php
if(isset($_POST["dk"]))
{
	

				header("Location:register.php");
		

}
?>
<?php
if(isset($_POST["hi"]))
{
	

				header("Location:admin/login.php");
		

}
?>
		</div>
</div>
</div>

<br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 

</body>
</html>


 
    </div>
 
        <div class="copy_right">
		<p>&copy; 2013 home_shoppe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		   </div>
    </div>
   <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

