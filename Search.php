




<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
</head>
<body>
	<?php require("conncet_1.php")
	
	?>
  <div class="wrap"  >
	<div class="header" style="background-color:#0099CC">
		<div class="headertop_desc" >
			<div class="call">
				 <p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
				
					<li><a href="login.php" style="background-color:#003333;">Login</a></li>
					
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
			<video width="300px" height="150px" playsinline autoplay muted loop>
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
			 
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div  class="menu">
	     		<ul >
			    	<li><a href="index.php">Home</a></li>
			    	<li><a href="about.php">About</a></li>
			    	<li><a href="delivery.php">Shop</a></li>
			    	<li><a href="news.php"> News</a></li>
			    	<li><a href="contact.php">Contact</a></li>
					<li class="active"><a href="search.php">Search Product</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	   
	     	<div class="clear"></div>
	     </div>	     
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>
		 
		
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
			right:-550px;
			
		}
		body{
			background-color:#339999;
		}
	</style>
</head>
<body>


<div style="
   
   width: 100%;
   height: 100px;
   
   display: flex;
flex-direction: column;
justify-content: center;
text-align: center;
   ">

<div   class="section group" style="background-color:#99CCCC;"   >
	   <div class="grid_1_of_4 images_1_of_4" style="background-color:#CCCC99;" >
		<h1 class="form-heading" align="center"></h1> </br>

	<form name="f1" method="GET" action="Search.php" align="center" >
  	Product Name <input type="text" name="NamePro"  /> <br/> <br/>
  	Price <select name="slPrice"> <br/> <br/>
		   <option value="0"></option>
		   <option value="20">20</option>
		   <option value="30">30</option>
		   <option value="170">170</option>
		   <option value="300">300</option>
		   <option value="360">360</option>
		   <option value="400">400</option>
		   <option value="450">450</option>
		   <option value="699">699</option>
		   <option value="800">800</option>
		   <option value="900">900</option>
		   <option value="2000">2000</option>
		   <option value="3500">3500</option>
	   	</select> <br/> <br/>
   <input type="submit" value="Search" name="OK" style="background-color:#4A708B;"  />
	</form>

</div>
	   </div>
</div>


	<?php
		require("conncet 1.php");
	?>

	<?php

		if(isset($_GET['OK']))
		{
 		  $name = "";
 		  $price = 0;
  		 $sql = "Select * from product";

  		 if(!empty($_GET["NamePro"])&&!empty($_GET["slPrice"]))
  		 {
	  		 $name = $_GET["NamePro"];
	  		 $price = $_GET["slPrice"];
	  		 $sql = $sql." where Name like '%{$name}%' and Price <= {$price}";
  		 }
 		 else if(!empty($_GET["NamePro"]))
  		 {
	  		 $name = $_GET["NamePro"];
	  		 $sql = $sql." where Name like '%{$name}%'";
  		 }
 		 else if(!empty($_GET["slPrice"]))
  		 {
	  		 $price = $_GET["slPrice"];
	  		 $sql = $sql." where Price <= {$price}";
 		 }

			 $stmt = $conn->prepare($sql);
		  	 $stmt->execute();
			 $result = $stmt->fetchAll();

	 		//    foreach ($result as $item) 
			//    {
			//  	 echo $items['Name'].'<br/>';
			//     echo $items['Price'].'<br/>';
			//     echo $items['Image'].'<br/>';
  				 //}   
	?>

	<table width="100%" >
  		 <tr>
	   	<td>
	<?php

   foreach($result as $item)
   {
	?>
	   <table width="25%" border="1" style="float:left">
		 <tr> <td> <?php  echo $item["Name"]."<br>";  ?> </td> </tr>
		 <tr> <td>
			   <a href="productdetail.php?idpro=<?php echo $item["Id"]?>">
			   <img src="image/<?php echo $item["Image"]; ?>" height="200px" width="150px";/> </a>
		</td> </tr>

	  	 <tr> <td> <?php  echo $item["Price"]."<br>"; ?> VND</td> </tr>
		</table>

	  	</td>
		</tr>	   
	 	</table>
	
	<?php } 
	}
	?>


</body>
</html>

 
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>

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

