<?php
session_start();
$uid=$_SESSION['USER_ID'];
$qty=(int)$_POST['qty'];
$pid=$_POST['pid'];
if($qty<=0)
{
header("location:nopurchase.php");
}
else
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
		$sql="update r_product set quantity=quantity-$qty where p_id='$pid' and quantity>=$qty;";
		$result=mysqli_query($link,$sql);
		if($result)
		echo "done";
		else
		header("location:nopurchase.php");
		$sql2="insert into rent values ('$uid','$pid','$qty',CURRENT_TIMESTAMP);";
		$result2=mysqli_query($link,$sql2);
		if($result2)
		{
			$_SESSION['qty']=$qty;
			$_SESSION['rpid']=$pid;
			//header("location:services.php");
			header("location:thanku2.php");
		}
		else
		{echo "cant do";}
}
?>



