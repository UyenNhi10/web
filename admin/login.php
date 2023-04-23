






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
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<style type="test/css">
	

</style>
</head>
<body>


<?php require("../conncet_1.php")
	
	?>
  <div class="wrap">
	<div class="header" >
		<div class="headertop_desc"  style="background-color:#0099CC">
			<div class="call" >
			<p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508 </span></span></p>
			</div>
			<div class="account_desc">
				<ul>
				<li><a href="../index.php" style="background-color:#003333">Home</a></li>
					<li><a href="login.php" style="background-color:#003333">Login</a></li>
					
			
				</ul>
				<style>
				li {
					font-size:28px;
					
				}
			</style>
			</div>
			<div class="clear"></div>
	</div>
		<div class="header_top"  style=background-color:#FF9999;>
		<div class="center">
			<video width="400px" height="200px" playsinline autoplay muted loop>
			<source src="../images/DONG.mp4" type="video/mp4" >
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
			right:-500px;
			
		}
	</style>
</head>
	</br>
<body>
<?php
	require("../conncet 1.php");
?>


	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled Document</title>
</head>
<style type="text/css">
		.form-heading
		{
	font-size: 35px;
    color: #668B8B;
    text-align: center;
	
			
		}
	</style>
<div>
<body>

<style >
		body{
			background-color:#339999;
		}
	</style>
<div class="section group" style="background-color:#CCCC99;"  >
				<div class="grid_1_of_4 images_1_of_4"  style="background-color:#FF9999;;"  >
<h1 class="form-heading"> Login Admin</h1> </br> 
<?php 
	require("../conncet 1.php");

?>
<form action="Login.php" method="post"  style="color:#666699" >
Username: <input type="text" name="username" /><br /> </br> 
Password: <input type="password" name="password" /><br /> </br> 
<input type="submit" name="ok" value="Login" style="background-color:#4A708B;"  /> </br> 
</form>

<?php 
if(isset($_POST["ok"]))
{
	$user = "";
	$pass = "";
	if(empty($_POST["username"]))
	{
		echo "Ban chua nhap Username";
		return;
	}
	else if (empty($_POST["password"]))
	{
		echo "Ban chua nhap password";
		return;
	}
	$user = $_POST["username"];
	$pass = $_POST["password"];
	echo ("Welcome: ".$user."<br/>your password: ".$pass);
	try{
		$sql = "Select * from admin where Username like '{$user}' ";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch();

				if($result["Password"]==$pass)
				{
					session_start();
					$_SESSION["sadmin"]=$user;
					$_SESSION["srole"] =$result["Role"];

					header("Location:manage.php");
				}
				else
					echo "Login that bai";
		}
			catch(PDOException $e){
				echo "Ket noi that bai".$e->getMessage();
		       }
}
?>
 <br/>
		

		</div>
</div>
</div>
</body>
</html>
	
			
</body>
</html>

</div>
</div>
 
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

