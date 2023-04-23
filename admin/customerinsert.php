
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
	<style >
		body{
			background-color:#339999;
		}
	</style>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc" style="background-color:#0099CC">
			<div class="call">
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

	
<?php 

require("../conncet 1.php");
?>


<style type="text/css">
			div
		{
			width: auto;
			right:-500px;
			
		}
	</style>
<form  style="color:#666699" method="post" >
	
				<div class="section group" style="background-color:#0099CC"  >
					<div class="grid_1_of_4 images_1_of_4" style="background-color:#DEB887" >

	<h1 class="form-heading"> Sign Up </h1> </br>
	
	Username <input type="text" name="Username" /> <br/>  <br/>
	Password <input type="password" name="Password"  /> <br/>  <br/>
	Name <input type="text" name="Name"  /> <br/>  <br/>
	Mobile <input type="text" name="Mobile" /> <br/>  <br/>
	Address <input type="text" name="Address" /> <br/>  <br/>
	IsActive
		<select name="IsActive">
		<option value="0">0</option>
		</select> <br/>  <br/>
		<input type="submit" name="OK" value="Register" style="background-color:#999999" />

	<style type="text/css">
		.form-heading
		{
	font-size: 35px;
    color: #668B8B;
    text-align: center;
		}
		
	</style>
		
				</div>
</div>
</form>
<div>
<body>
	
<style >
		body{
			background-color:#339999;
		}
	</style>

	<?php 
		if(isset($_POST['OK']))
		{
			$user = "";
			$pass = "";
			$name ="";
			$mobile ="";
			$address ="";
			if(empty($_POST["Username"])||empty($_POST["Password"])||empty($_POST["Name"])
			||empty($_POST["Mobile"])||empty($_POST["Address"]))
			{
				echo "Ban chua nhap du lieu day du";
				return;
			}
			$id = $_POST["Id"];
			$user = $_POST["Username"];
			$pass = $_POST["Password"];
			$name = $_POST["Name"];
			$mobile = $_POST["Mobile"];
			$address = $_POST["Address"];
			$isactive = $_POST["IsActive"];
		try
		{
			$sql = "Select * from customer where Username = '{$user}'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			if(count($result)>0)
			{
				echo "Username nay da ton tai. Dang ky that bai";
				return;
			}
			$sql = "Insert into customer values ('{$id}','{$user}','{$pass}','{$name}','{$mobile}','{$address}', '{$isactive}')";
			echo $sql;
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			echo "Dang ky thanh cong";
			header("Location:customer.php");
		}
		catch(PDOException $e){
			echo "Dang ky that bai ".$e->getMessage();
		}
		}
	?>

	</div>
</body>
</html>

<div style="background-color:#0099CC" class="copy_right">
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