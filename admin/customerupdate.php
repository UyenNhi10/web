
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
		<div class="header_top" style=background-color:#FF9999;>
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
</head>
<body>
    <?php
        require("../conncet 1.php");
    ?>  
    <?php
            if(!empty($_GET["id"]))
        {
            $id= $_GET["id"];
            $sql = "select * from customer Where Id ='{$id}'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
            $user = $result["Username"];
            $pass = $result["Password"];
            $name = $result["Name"];
            $mobile =$result["Mobile"];
            $address =$result["Address"];
             $isactive = $result["IsActive"];
               $chon0="";
               $chon1="";
               $chon2="";
               $chon3="";
            if($isactive==0)
              {
                 $chon0 = "Selected";
              }
            else if ($isactive==1)
             {
            $chon1 = "Selected";
             }
            else if ($isactive==2)
              {
            $chon2 = "Selected";
             }
             else
             {
           $chon3 = "Selected";
             }   
        }
    ?>

<style type="text/css">
			div
		{
			width: auto;
			right:-500px;
			
		}
	</style>
<div class="section group" style="background-color:#0099CC"   >
				<div class="grid_1_of_4 images_1_of_4" style="background-color:#DEB887" >
 <form method="post">
    Username <input type="text" name="Username" readonly value="<?php echo $user ?>"/> <br/> <br/>
    Password <input type="password" name="Password" value="<?php echo $pass ?>"/> <br/> <br/>
    Name <input type="text" name="Name" value="<?php echo $name ?>"/> <br/> <br/>
    Mobile <input type="text" name="Mobile" value="<?php echo $mobile ?>"/> <br/> <br/>
    Address <input type="text" name="Address" value="<?php echo $address ?>"/> <br/> <br/>
    IsActive
    <select name="Isactive">
            <option value="0" <?php echo $chon0 ?> >0</option>
            <option value="1" <?php echo $chon1 ?> >1</option>
            <option value="2" <?php echo $chon2 ?> >2</option>
            <option value="3" <?php echo $chon3 ?> >3</option>
            
    </select> <br/> <br/>

    <input type="submit" name="OK" value="Update" style="background-color:#999999"/> <br/>
    </form>
                </div>
</div>
<div> <style >
		body{
			background-color:#339999;
		}
	</style>
    <?php
            if(isset($_POST["OK"]))
            {
                $user = "";
                $pass = "";
                $name = "";
                $mobile ="";
                $address ="";

                if(empty($_POST["Username"])||empty($_POST["Password"])||empty($_POST["Name"])||empty($_POST["Mobile"])||empty($_POST["Address"]))
                {
                    echo "Ban chua nhap du lieu day du";
                    return;
                }
                
                $user = $_POST["Username"];
                $pass = $_POST["Password"];
                $name = $_POST["Name"];
                $mobile = $_POST["Mobile"];
                $address = $_POST["Address"];
                $isactive = $_POST["IsActive"];
           
                try 
                {
                    $sql = "Update customer set Username = '($user)', Password = '{$pass}', Name ='{$name}',Mobile ='{$mobile}', Address='{$address}',  IsActive = '{$isactive}' where Id ='{$id}' ";
                    $stmt =$conn->prepare($sql);
                    $stmt->execute();
                    echo "Update thanh cong";
                    header("Location:customer.php");

                }
                catch(PDOException $e){
                    echo "Update that bai ".$e->getMessage();
                }
            }
 
    ?>
</div>

<div class="copy_right" style="background-color:#0099CC" class="copy_right">
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