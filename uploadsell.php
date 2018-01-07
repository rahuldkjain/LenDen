<?php 
if (isset($_POST['uploadsell']))
{
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
	
	 $pname = $_POST['pname']; 
	 $discription=$_POST['discription'];
	 $price=$_POST['price'];
	 $quantity=$_POST['qty'];
	 	$category=$_POST['category'];
	 $query = "INSERT INTO s_product (name, description, quantity, category, date_of_upload,username,price) VALUES ('$pname','$discription','$quantity','$category',NOW(),'$uid','$price')"; 
	    $results = mysqli_query($link,$query);
		$p_id = mysqli_insert_id($link);
	 $query3="insert into pimage (pid) values ('$p_id')";
	 $result=mysqli_query($link,$query3);
	 
	 $name = $_FILES['x']['name'];
	 $target_dir = "simage/";
        $target_file = $target_dir . basename($_FILES["x"]["name"]);

        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        
        $extensions_arr = array("jpg","jpeg","png","gif");

        
        if( in_array($imageFileType,$extensions_arr) ){
            
            $query="UPDATE pimage SET img1 = '".$name."' WHERE pid = '$p_id';";
            if(mysqli_query($link,$query) or die(mysqli_error($link)))
			{
           
            
            if(move_uploaded_file($_FILES['x']['tmp_name'],'images/'.$name))
			 echo"done";
		  
			}
			

        }
		
		
		
		
		$name = $_FILES['y']['name'];
	 $target_dir = "simage/";
        $target_file = $target_dir . basename($_FILES["y"]["name"]);

        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        
        $extensions_arr = array("jpg","jpeg","png","gif");

        
        if( in_array($imageFileType,$extensions_arr) ){
            
            $query="UPDATE pimage SET img2 = '".$name."' WHERE pid = '$p_id';";
            if(mysqli_query($link,$query) or die(mysqli_error($link)))
			{
           
            
            if(move_uploaded_file($_FILES['y']['tmp_name'],'images/'.$name))
			 echo"2";
		  
			}
			

        }
		
		
		$name = $_FILES['z']['name'];
	 $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["z"]["name"]);

        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        
        $extensions_arr = array("jpg","jpeg","png","gif");

        
        if( in_array($imageFileType,$extensions_arr) ){
            
            $query="UPDATE pimage SET img3 = '".$name."' WHERE pid = '$p_id';";
            if(mysqli_query($link,$query) or die(mysqli_error($link)))
			{
           
            
            if(move_uploaded_file($_FILES['z']['tmp_name'],'images/'.$name))
			echo"3";
		  
			}
			

        }
		
	
		
		
		if($results)
		{
			
			header("location: successful.html"); 
		}
		else
			header("location: unsuccessful.html");
}
?>