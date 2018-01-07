<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/lenden-310x308.jpg" type="image/x-icon">
  <meta name="description" content="Web Site Maker Description">
  <title>Product Page For Rent</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qBXmYPk4jI" once="menu" id="menu1-24" data-rv-view="2880">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="services.php">
                         <img src="assets/images/lenden-310x308.jpg"  title="" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="services.php">LenDen</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-7" href="./aboutus.php" target="_parent"><span class="socicon socicon-angellist mbr-iconfont mbr-iconfont-btn"></span>About Us&nbsp;</a></li>
                <li class="nav-item dropdown open"><a class="nav-link link text-white dropdown-toggle display-7" href="./services.php" target="_parent" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbri-star mbr-iconfont mbr-iconfont-btn"></span>Services&nbsp;</a><div class="dropdown-menu"><div class="dropdown"><a class="text-white dropdown-item dropdown-toggle display-7" target="_parent" data-toggle="dropdown-submenu" aria-expanded="false">Buy</a><div class="dropdown-menu dropdown-submenu"><form method="post" action="buyproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category'  value='all'></form><form method="post" action="buyproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category'  value='clothing'></form><form method="post" action="buyproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category' aria-expanded="true" value='electronics'></form><form method="post" action="buyproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category' aria-expanded="true" value='books'></form><form method="post" action="buyproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category' aria-expanded="true" value='others'></form></div></div><div class="dropdown open"><a class="text-white dropdown-item dropdown-toggle display-7" target="_parent" aria-expanded="true" data-toggle="dropdown-submenu">Rent</a><div class="dropdown-menu dropdown-submenu"><form method="post" action="rentproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category'  value='all'></form><form method="post" action="rentproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category'  value='clothing'></form><form method="post" action="rentproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category' aria-expanded="true" value='electronics'></form><form method="post" action="rentproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category' aria-expanded="true" value='books'></form><form method="post" action="rentproducts.php"><input class="text-white dropdown-item display-7" target="_parent"type='submit' name='category' aria-expanded="true" value='others'></form></div></div><div class="dropdown"><a class="text-white dropdown-item dropdown-toggle display-7" target="_parent" aria-expanded="false" data-toggle="dropdown-submenu">Upload</a><div class="dropdown-menu dropdown-submenu"><a class="text-white dropdown-item display-7" data-toggle="modal" data-target="#sellupload_modal" target="_parent" aria-expanded="false">For Sell</a><a class="text-white dropdown-item display-7" data-toggle="modal" data-target="#rentupload_modal" target="_parent" aria-expanded="false">For Rent</a></div></div></div></li><li class="nav-item"><a class="nav-link link text-white display-7" href="./signout.php" target="_parent">sign out?&nbsp;</a></li><li class="nav-item"><a class="nav-link link text-white display-7" href="./aboutus.php" target="_parent"></a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="./profile.php" target="_parent"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span> <?php
            session_start();
				   if( $uid=$_SESSION['USER_ID'])
				   {
				  
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
		$sql = "SELECT * FROM user where username='$uid'";
$result = mysqli_query($link,$sql) ;
if($result){
	$result1= mysqli_fetch_array($result , MYSQL_ASSOC);
	echo $result1['name'] ;
}else {
	echo "The query didn't executed" ;
}}
else
header("location:home.html");
                    ?>  </a></div>
        </div>
    </nav>
</section>

<?php
	$pid=$_POST['view'];
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
		
		$query="select * from rimage where pid='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
	echo '<section class="engine"><a href="https://mobirise.co/e">web page building software</a></section><section class="carousel slide cid-qBXsMzGKEO" data-interval="false" id="slider2-2k" data-rv-view="2963">

 
    <div class="container content-slider">
        <div class="content-slider-wrap">
            <div><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider2-2k" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider2-2k" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider2-2k" class=" active" data-slide-to="2"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url();"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="images/'.$result1['img1'].'"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/pexels-photo-193004-640x427.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="images/'.$result1['img2'].'"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/pexels-photo-596940-640x426.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="images/'.$result1['img3'].'"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider2-2k"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider2-2k"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div> 
        </div>
    </div>
</section>';	
?>

<section class="features14 cid-qBXr2p7udb" id="features14-2f" data-rv-view="2975">
    
    

    
    <div class="container align-center">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
		<?php
		$pid=$_POST['view'];
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
		$query="select * from r_product where p_id='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
		if($result1['name'])
		echo $result1['name'];
	else
		echo "A PRODUCT BY LENDEN";
		?></h2>
        <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5">
		<?php
		$pid=$_POST['view'];
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
		$query="select * from r_product where p_id='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
		if($result1['description'])
		{echo $result1['description'];echo "</br></br>";echo $result1['category'];}
	else
		echo "no description provide by seller";
		?></h3>
        <div class="media-container-column">
            <div class="row justify-content-center">
                <div class="card p-4 col-12 col-md-6 col-lg-4">
                    <div class="media pb-3">
                        <div class="card-img align-self-center">
                            <span class="mbr-iconfont mbri-speed" media-simple="true"></span>
                        </div>
                        <div class="media-body">
                            <h4 class="card-title py-2 align-left mbr-fonts-style display-5">
                                Rs.
								<?php
								$pid=$_POST['view'];
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
		$query="select * from r_product where p_id='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
		if($result1['rentperday'])
		echo "Rent Per Day: Rs.".$result1['rentperday'];
	else
		echo "out of stock";
		?></h4>
                        </div>
                    </div>                
                    <div class="card-box align-left">
                        <p class="mbr-text mbr-fonts-style display-7">
                          
                        </p>
                    </div>
                </div>

                <div class="card p-4 col-12 col-md-6 col-lg-4">
                <div class="media pb-3">
                    <div class="card-img align-self-center">
                        <span class="mbr-iconfont mbri-sale" media-simple="true"></span>
                    </div>
                    <div class="media-body">
                        <h4 class="card-title py-2 align-left mbr-fonts-style display-5">
                                Rs.<?php
								$pid=$_POST['view'];
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
		$query="select * from r_product where p_id='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
		if($result1['penaltyperday'])
		echo "Penalty Per Day: Rs.".$result1['penaltyperday'];
	else
		echo "out of stock";
		?></h4>
                    </div>
                </div>
                    <div class="card-box align-left">
                        
                    </div>
                </div>

                <div class="card p-4 col-12 col-md-6 col-lg-4">
                <div class="media pb-3">
                    <div class="card-img align-self-center">
                        <span class="mbr-iconfont mbri-success" media-simple="true"></span>
                    </div>
                    <div class="media-body">
                        <h4 class="card-title py-2 align-left mbr-fonts-style display-5">
                            LenDen Verified</h4>
                    </div>
                </div>
                    <div class="card-box align-left">
                       
                    </div>
                </div>

                
            </div>
            <div class="media-container-row image-row">
                <div class="mbr-figure" style="width: 60%;">
                   <?php
				   $pid=$_POST['view'];
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
		$query="select * from rimage where pid='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
		if($result1['img1'])
		echo '<img src="images/'.$result1["img2"].'" media-simple="true">';
	else
		echo "NO DESCRITION PROVIDED BY SELLER";
		?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="header3 cid-qBXriOEyOU mbr-parallax-background" id="header3-2g" data-rv-view="2978">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 100%;">
                
				<?php
				$pid=$_POST['view'];
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
		$query="select * from rimage where pid='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
		if($result1['img1'])
		echo '<img src="images/'.$result1["img1"].'" media-simple="true">';
	else
		echo "NO DESCRITION PROVIDED BY SELLER";
		?>
            </div>

            <div class="media-content">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">                        
				<?php
				$pid=$_POST['view'];
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
		$query="select * from r_product where p_id='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
		if($result1['name'])
		echo $result1['name'];
	else
		echo "NO DESCRITION PROVIDED BY SELLER";
		?></h1>
                
                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-5">
                        <?php
						$pid=$_POST['view'];
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
		$query="select * from r_product where p_id='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
		if($result1['description'])
		echo $result1['description'];
	else
		echo "NO DESCRITION PROVIDED BY SELLER";
		?>
                    </p>
                    <p class="mbr-text mbr-fonts-style display-5">
                        <?php
						$pid=$_POST['view'];
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
		$query="select * from r_product where p_id='$pid'";
		$result=mysqli_query($link,$query);
		$result1=mysqli_fetch_array($result , MYSQL_ASSOC);
		if($result1['quantity'])
		echo "Quantity Available:".$result1['quantity'];
	else
		echo "NO DESCRITION PROVIDED BY SELLER";
		
             echo      ' </p>
                </div>
                <div class="mbr-section-btn">
                    <form method="post" action="rupdate.php">
				<input type="hidden" name="pid" value="' .$pid.'" />
				<input type="number" class="btn btn-default btn-sm" placeholder="Quantity"name="qty"/>
                   <input type="submit" name="buy" value="RENT" class="btn btn-primary"  /></form></div>
            </div>';?>
        </div>
    </div>

</section> 
<section class="cid-qApxIvzdKE" id="footer1-13" data-rv-view="2734">
    <div class="mbr-overlay" style="background-color: rgb(60, 60, 60); opacity: 0.5;"></div>

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-4">
                <div class="media-wrap">
                    <a href="services.php">
                        <img src="assets/images/lenden-1-310x308.jpg" height:"300px" width:"300px" title="" media-simple="true" />
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 mbr-fonts-style display-7">
                <h5 class="pb-3">
                <br>
                    Address
                </h5>
                <p class="mbr-text">IIITDM Jabalpur</p>
            </div>
            <div class="col-12 col-md-4 mbr-fonts-style display-7">
                <h5 class="pb-3">
            	<br>
                    Contacts
                </h5>
                <p class="mbr-text">
                 
                 Phone: +8349506159<br><br></p>
            </div>
           
        </div>
        <div class="footer-lower">
            
            <div class="media-container-row mbr-white">
                <div class="col-sm-12 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                    <br>
                        © 2017 LenDen Inc.
                    </p>
                </div>
               
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="sellupload_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <div class="modal-title"><h3>Upload For Sell</h3></div>
              </div>
              <div class="modal-body">
                  <form action="uploadsell.php" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
						<input type="text" class="form-control" name="pname" id="name" placeholder="Product name">
					</div> <!-- form-group // -->
   
  <div class="form-group">
    <textarea class="form-control" name="discription" placeholder="Product Discription"></textarea>
   </div>
   
    <div class="form-group">
     <input type="text" class="form-control" name="price" id="name" placeholder="Enter Product Price">
    </div>

  <div class="form-group">
	<input type="number" class="form-control" name="qty" id="qty" placeholder="Quantity">
  </div> 
<div class="form-group">
    <label for="tech" class="control-label">Choose Category</label>
    
   <select class="form-control" name="category">
	<option value="">Categories</option>
	<option value="Electronics">Electronics</option>
	<option value="Books">Books</option>
	<option value="Clothings">Clothing</option>
	<option value="Others">Others</option>
   </select>
    
  </div>
  <div class="form-group">
    <label for="name" class="control-label">Product Images</label></br>
    
       <input type="file" name="x"/><br>
    
	
        <input type="file" name="y"><br>
    
	
      <input type="file" name="z"><br>
    
  </div> <!-- form-group // -->
   <!-- form-group // -->
  <hr>
   <!-- form-group // -->


		</div>
              <div class="modal-footer">
			  
				<div class="form-group">
    
					<input type="submit" class="btn btn-primary" name="uploadsell" value="uploadsell" >Upload Product</button>
   
				</div>
			</form>
                
              </div>
            </div>
          </div>

</div>
		
<div class="modal fade" id="rentupload_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <div class="modal-title"><h3>Upload For Rent</h3></div>
              </div>
              <div class="modal-body">
                  <form action="uploadrent.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
						<input type="text" class="form-control" name="pname" id="name" placeholder="Product Name">
					</div> <!-- form-group // -->
   
  <div class="form-group">
    <textarea class="form-control" name="discription" placeholder="Product Discription"></textarea>
   </div>
   
    <div class="form-group">
     <input type="text" class="form-control" name="rate" id="name" placeholder="Enter Rent/Day">
    </div>
	
	<div class="form-group">
     <input type="text" class="form-control" name="penalty" id="name" placeholder="Enter Penalty/Day">
    </div>

  <div class="form-group">
	<input type="number" class="form-control" name="qty" id="qty" placeholder="Quantity">
  </div> 
   <div class="form-group">
    <label for="tech" class="control-label">Choose Category</label>
    
   <select class="form-control" name="category">
	<option value="">Categories</option>
	<option value="Electronics">Electronics</option>
	<option value="Books">Books</option>
	<option value="Clothing">Clothing</option>
	<option value="Others">Others</option>
   </select>
    
  </div>
  <div class="form-group">
    <label for="name" class="control-label">Product Images</label></br>
    
      <label class="control-label" ></label> <input type="file" name="x"><br>
    
	
      <label class="control-label" ></label>  <input type="file" name="y"><br>
    
	
      <label class="control-label" ></label>  <input type="file" name="z"><br>
    
  </div> <!-- form-group // -->
  <!-- form-group // -->
  <hr>
   <!-- form-group // -->

                  
		</div>
              <div class="modal-footer">
			  
				<div class="form-group">
    
<input type="submit" class="btn btn-primary" name="uploadrent" value="uploadrent" >Upload Product</button>
				</div>
			
                
              </div>
            </div>
          </div>
</form>
</div>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  
  
</body>
</html>