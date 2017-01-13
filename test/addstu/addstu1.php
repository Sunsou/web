<?php
session_start();
include('../check/conn.php');

	$user_id=$_POST['user_id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$is_admin=$_POST['is_admin'];
	$query1=$db->query("SELECT * FROM `user` WHERE `user_id`='$user_id'");
	if(mysqli_num_rows($query1)>0){
		echo '<script>alert("用户信息已添加！");
		window.location.href="../teacher.php"</script>';	
	}
	else{
		$query=$db->query("INSERT INTO `user`(`user_id`, `username`, `password`, `is_admin`) VALUES ('$user_id','$username','$password','$is_admin')");
		if (!$query){
			die('Error: ' . mysql_error());
			echo '</br></br><a href="../teacher.php">回到首页</a>';
		}
		echo "添加一条记录";	
		echo '</br></br><a href="../teacher.php">回到首页</a>';
	}
	
?>