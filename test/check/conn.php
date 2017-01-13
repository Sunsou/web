<?php
$db=new mysqli('localhost','root','','system'); 
if(mysqli_connect_error()){  
   echo('Could not connect to database.');  
   exit; 
} 
$result=$db->query("SELECT * FROM user"); 
$row=$result->fetch_row(); 
	$type=$_SESSION['type']; 
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	if($type==0){
		$user_id=$_SESSION['user_id'];	
	}
	
?>