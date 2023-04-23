


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
  <div class="wrap">
	<div class="header">
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
	<div class="header_bottom">
	     	<div class="menu">
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
   </div>
 <div style="color:#9C9C9C;"class="main">
   

 <body>
    <?php
    require("conncet 1.php");
    $sql = "Select * from Product"; 
    $stmt = $conn->prepare($sql); 
    $stmt->execute(); 
    $result = $stmt->fetchAll(); 
    ?>
    <?php
     if(empty($_GET["idcata"]))
     {
         $sql= "select * from product";
     }
     else
     {
         $idcata = $_GET["idcata"];
         $sql = "select * from product where idcata={$idcata}";
 
     }
    $stmt = $conn->prepare($sql);
    $stmt -> execute();
    $result = $stmt-> fetchAll();
    $sanphamtrang = 3
    ?>
	
    <?php
$sql2 ="select * from catalog";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$result2 = $stmt2->fetchAll();



foreach ($result2 as $item2) {
   $id=$item2['Id'];
   $name=$item2['Name'];
   echo "<a href=product.php?idcata={$id}>{$name}</a>" . " [ " . " ] "; 

}

?>
</div>
</br>
</br>
</br>

    <table width="100%">
        <tr>
            <td>
                <?php foreach($result as $item)
                {
                    ?>
                    <table width="25%" border="1" style="float:left">
                    <tr> <td>   <?php echo $item["Name"]?> </td> </tr>
                    <tr> <td> 
                        <a href="productdetail.php?idpro=<?php echo $item["Id"]?>"> 
                        <Img src = "Image/<?php echo $item["Image"]; ?>" height = "230px" width = "260px"  >/
                        </a> 
                    </td> </tr>
                    <tr> <td> <?php echo $item ["Price"]?> </td> </tr>
                  
                    </table>
         <?php }?>
            </td>
        </tr>
    </table>
                


</body>


 
    </div>
 </div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
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

