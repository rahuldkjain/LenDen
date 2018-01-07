<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/lenden-310x308.jpg" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  <title>About Us</title>
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
				  
				$link = mysqli_connect('localhost', 'root', ''); 
		if(!$link) 
		{ 
		die('Failed to connect to server: ' . mysql_error()); 
		} 
		//Select database 
		$db = mysqli_select_db($link,'lenden'); 
		if(!$db) 
		{ 
		die("Unable to select database"); 
		}
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

<section class="testimonials5 cid-qApqJTJnPR mbr-parallax-background" id="testimonials5-11" data-rv-view="2724">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(15, 118, 153);">
    </div>
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-1">Us</h2>
                <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">
                    Here you can get details of the all developer of LenDen.
                </h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="media-container-column">
            

            
        <div class="mbr-testimonial align-center col-12 col-md-10">
                <div class="panel-item">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/img-20170209-102425-343-7-200x200.jpg" alt="" title="" media-simple="true">
                        </div>
                        <p class="mbr-text mbr-fonts-style mbr-white display-7"></p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style mbr-white display-5">
                             Rahul Jain</div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style mbr-white display-7">
                               Developer
                        </small>
                    </div>
                </div>
            </div><div class="mbr-testimonial align-center col-12 col-md-10">
                <div class="panel-item">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/22860123-1512247822192608-789611401772693247-o-2011x2015.jpg" alt="" title="" media-simple="true">
                        </div>
                        <p class="mbr-text mbr-fonts-style mbr-white display-7"></p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style mbr-white display-5">
                             Kanika Dhiman</div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style mbr-white display-7">
                               Developer
                        </small>
                    </div>
                </div>
            </div><div class="mbr-testimonial align-center col-12 col-md-10">
                <div class="panel-item">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/22894434-1989311357979352-2296144763951280489-n-674x674.jpg" alt="" title="" media-simple="true">
                        </div>
                        <p class="mbr-text mbr-fonts-style mbr-white display-7"></p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style mbr-white display-5">
                             Saurav Kumar</div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style mbr-white display-7">
                               Developer
                        </small>
                    </div>
                </div>
            </div></div>
    </div>   
</section>

<section class="cid-qApxIvzdKE" id="footer1-13" data-rv-view="2734">
    <div class="mbr-overlay" style="background-color: rgb(60, 60, 60); opacity: 0.5;"></div>

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-4">
                <div class="media-wrap">
                    <a href="services.php">
                        <img src="assets/images/lenden-1-310x308.jpg" height:"300px" width:"300px" title="" media-simple="true"/>
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
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>