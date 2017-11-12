<?php 
echo "hello sign up";
/*
if ($_POST['submit'] == 'send')
{
	 $username = $_POST['username']; 
     $password = $_POST['password']; 
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$mob_no = $_POST['mob_no']; 
	if($username && $password && $name && $email && $mob_no)
	{
		$link = mysql_connect('localhost', 'root', ''); 
		if(!$link) 
		{ 
		die('Failed to connect to server: ' . mysql_error()); 
		} 
		//Select database 
		$db = mysql_select_db('lenden'); 
		if(!$db) 
		{ 
		die("Unable to select database"); 
		}
		//Create Insert query 
		$query = "INSERT INTO user (username, password, name, email, mob_no) VALUES ('$username','$password','$name','$email','$mob_no')"; 
		//Execute query 
		$results = mysql_query($query); 
		
					//Check if query executes successfully 
					if($results == FALSE) 
					 header('location:home.html'); 
					else 
					header('location:services.html'); 


		 
	}
	else
	{
		include('h.html');
		
	}
}
*/
?>