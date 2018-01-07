<?php 
if ($_POST['signup']=='su')
{
	$username =(int) $_POST['username']; 
	$password = $_POST['password']; 
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$mob_no =$_POST['mob_no']; 
	$hallno =$_POST['hall']; 
	$roomno =$_POST['room_no']; 
	
	if($username && $password && $name && $email && $mob_no)
	{
		$link = mysqli_connect('localhost','root','', 'lenden');  
			/*Check link to the mysql server*/ 
			if(!$link)
			{ 
			die('Failed to connect to server: ' . mysqli_error());
			 } 

				/*Select database*/ 
				
				/*$db = mysqli_select_db($link,'lenden'); 
				if(!$db)
				{
				 die("Unable to select database"); 
				}
				*/
	//Create Insert query 
		$query = "INSERT INTO user (username, password, name, email, mob_no,hall_number,room_no) VALUES ('$username','$password','$name','$email','$mob_no','$hallno','$roomno')"; 
		//Execute query 
		
		$results = mysqli_query($link, $query); 
		
					//Check if query executes successfully 
					if($results == FALSE) 
					header('location:invalid2.html'); 
					else 
					{
						$sql2= "insert into image (iusername) values ('$username')";
						$res=mysqli_query($sql2);
						$q="SELECT username FROM user WHERE username=$username";
						$r=mysqli_query($q);
						$name=$r1['$q'];
						session_start(); 
						$_SESSION['IS_AUTHENTICATED'] = 1; 
						$_SESSION['USER_ID'] = $username; 
						$_SESSION['USER_NAME'] =$name; 
						header('location:services.php'); 
					}


		
	}
	else
	{
		header('location:invalid2.html'); 
		
	}
}
?>