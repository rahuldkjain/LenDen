<!doctype html>
<html>
<head>
    <?php
    
  
    if(isset($_POST['name'])){
		session_start();
		$uid=$_SESSION['USER_ID'];
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
        $name = $_FILES['file']['name'];
        $target_dir = "image/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");
        if( in_array($imageFileType,$extensions_arr) ){
            $query="UPDATE image SET name = '".$name."' WHERE iusername = '$uid';";
            if(mysqli_query($link,$query) or die(mysqli_error($link)))
			{
           
            if(move_uploaded_file($_FILES['file']['tmp_name'],'image/'.$name))
			 header('location:profile.php');
		  else
			  echo "bsjcsncsc";
			}
			else
				echo "undsevadvv";

        }
		
    
    }
    ?>
	
<body>
   

</body>
</html>
