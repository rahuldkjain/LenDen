<?php
if(isset($_POST['update']))
{
echo $pid=$_POST['pid'];
echo $name=$_POST['name'];
echo $description=$_POST['description'];
echo $quantity=$_POST['quantity'];
echo $price=$_POST['price'];
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
		$sql="update s_product set name='$name',description='$description',quantity='$quantity',price='$price' where p_id='$pid';";
		$result=mysqli_query($link,$sql);
		
		if($result )
		{
			header("location:profile.php");
		}
		else
		{echo "bfbfsbnsfbnsfboisfbnsbnsrbjsfnbofsb";}
}
if(isset($_POST['updates']))
{
echo $pid=$_POST['pid'];
echo $name=$_POST['name'];
echo $quantity=$_POST['quantity'];
echo $rent=$_POST['rent'];

echo $penalty=$_POST['penalty'];
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
		$sql="update r_product set name='$name',quantity='$quantity',rentperday='$rent',penaltyperday='$penalty' where p_id='$pid';";
		$result=mysqli_query($link,$sql);
		
		if($result )
		{
			header("location:profile.php");
		}
		else
		{echo "bfbfsbnsfbnsfboisfbnsbnsrbjsfnbofsb";}
}
?>



