<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  
</head>
<body>
<?php 
if ($_POST['login'] == 'login')
{ 
//Collect POST values 
$username = (int)$_POST['username']; 
$password = mysqli_real_escape_string($_POST['password']); 

			if($username && $password)
			{ 
			//Connect to mysql server 
			$link = mysqli_connect('localhost', 'root', '', 'lenden'); 
			//Check link to the mysql server 
				if(!$link) 
						{ 
						die('Failed to connect to server: ' . mysqli_error()); 
						} 
			//Select database
/*			
			$db = mysqli_select_db('lenden'); 
				if(!$db) 
						{ 
						die("Unable to select database"); 
						} 
	
*/	//Create query (if you have a Logins table the you can select login id and password from there)
			$qry="SELECT * FROM user WHERE username = $username AND password ='$password'"; 
			

			//Execute query 
			$result=mysqli_query($link, $qry); 
			
			//Check whether the query was successful or not 
			//if($login == 'ABC' && $password =='XYZ'){ 
			$count = mysqli_num_rows($result);
			//$count = 1; 
			

			//if query was successful it should fetch 1 matching record from the table. 
			if( $count == 1)
				{ 
				$q="SELECT name FROM user WHERE username = $username AND password ='$password'";
				$r1=mysqli_fetch_array($q);
				$name=$r1['$q'];
				//Login successful set session variables and redirect to main page. 
				session_start(); 
				$_SESSION['IS_AUTHENTICATED'] = 1; 
				$_SESSION['USER_ID'] = $username; 
				$_SESSION['USER_NAME'] =$name; 
				header('location:services.php'); 
				} 
			else
				{ 
				//Login failed 
				 /* echo "<script>$('#incorrectModal').modal('show')</script>";
				echo '<form method="post" action="invalid.php">
				<input type="hidden" name="inv" value="iuop" />
				</form>';*/
				//$_SESSION['inv']="iuop";
				 header("location: invalid.html");
				//exit(); 
				} 
			} 
			
			
			else
			{ 
			//$_SESSION['inv']="ippp";
				 header("location: services.php");
			} 
} 
else{ 
//$_SESSION['inv']="jl";
				 header("location: invalid.html");
} 


?>


    </body>
    </html>