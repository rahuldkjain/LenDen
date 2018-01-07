<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html><html>
<head>
  <!-- Site made with Mobirise Website Builder v4.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/lenden-310x308.jpg" type="image/x-icon">
  <meta name="description" content="Web Maker Description">
  <title>Services</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<?php
session_start();
$pid=$_SESSION['rpid'];
$uid=$_SESSION['USER_ID'];
$qty=$_SESSION['qty'];
			$link = mysqli_connect('localhost', 'root', '', 'lenden'); 
		if(!$link) 
		{ 
		die('Failed to connect to server: ' . mysql_error()); 
		} 
		//Select database 
		/*
		$db = mysqli_select_db($link,'lenden'); 
		if(!$db) 
		{ 
		die("Unable to select database"); 
		}
		*/
		$sql="select user.name as name, email,mob_no,hall_number,room_no,rentperday from r_product,user  where  p_id='$pid' and r_product.username=user.username";
		$result=mysqli_query($link,$sql);
		
		
		if($result){
	$result1= mysqli_fetch_array($result , MYSQL_ASSOC);
	$amt=$qty*$result1['rentperday'];
echo '<section class="cid-qAohBDbea3 mbr-fullscreen mbr-parallax-background" id="header2-r" data-rv-view="2882">

   
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(118, 118, 118);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Thank you for your purchase!</h1>
				 <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Owner name:'.$result1['name'].'<br>
					Owner email:'.$result1['email'].'<br>
					Owner mobile number:'.$result1['mob_no'].'<br>
					Owner hall no:'.$result1['hall_number'].'<br>
					Owner room no:'.$result1['room_no'].'<br>
					Rent Per Day:'.$amt.'</p>
                <div class="mbr-section-btn">
				
<a class="btn btn-md btn-secondary display-4" href="services.php">Click here to Continue</a></div>
            </div>
        </div>
    </div>
   
</section>';}
else
{
	echo 'jyawgj';}
?>
</body>
</html>