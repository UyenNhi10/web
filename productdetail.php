




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
</head>
<body>
<?php require("conncet_1.php")
	
	?>

<style>
				body {
					background-color: #33CCFF;
				}
			</style>
		

  <div class="wrap" >
	<div class="header" style=background-color:#FF9999;>
		<div class="headertop_desc">
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
		<div class="header_top">
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
	<div class="header_bottom" >
	     	<div class="menu" >
	     		<ul>
			    	<li><a href="index.php">Home</a></li>
			    	<li><a href="about.php">About</a></li>
			    	<li><a href="delivery.php">Shop</a></li>
			    	<li  ><a href="news.php">News</a></li>
			    	<li><a href="contact.php">Contact</a></li>
					<li><a href="search.php">Search Product</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
		
	     	
	     	<div class="clear"></div>
	     </div>
		</br>
		</br>	    
		</br> 	
		
   </div> 
 <div style="color:#0000FF"  class="main">
   

 		<?php
			require("conncet 1.php")
		?>
		<?php
			if(!empty($_GET["idpro"]))
			{
			$sql = "select * from Product where Id= ".$_GET["idpro"];
			$stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
			
			//echo $result["Name"];
			//echo $result["Image"];
			//echo $result["Price"];
			//echo $result["Description"];		
		?>
			  <tbody>
					<table width="286" height="209" border="1" style=background-color:#CCFF99>
				<tr>
				  <td width="82"><?php echo $result["Name"]; ?></td>
				  <td width="102" rowspan="3"><?php echo $result["Description"];?></td>
				</tr>
				<tr>
				  <td><img src = "image/<?php echo $result["Image"];?>" height="200px" width="150px"/></td>
				</tr>
				<tr>
				  <td><?php echo $result["Price"];?> VND</td>
				</tr>
			  </tbody>
		<?php
		}
	    ?>
				</table>




 
    </div>
 </div>
	</br>
	</br>
	</br>
   <div class="footer" style=background-color:#FF9999>
   	  <div class="wrap">	
	     <div class="section group" style=background-color:#FF9999;>
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="delivery.html">Orders and Returns</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.html">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="contact.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="images/dribbble.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
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

