<?php
session_start();
include('../check/conn.php');
	
	$grade=$_POST['grade'];
	$profe=$_POST['profe'];
	$class=$_POST['class'];
	$sex=$_POST['sex'];
	$phone=$_POST['phone'];
	$query=$db->query("UPDATE `student` SET `grade`='$grade',`profe`='$profe',`class`='$class',`sex`='$sex',`phone`='$phone' WHERE `user_id`='$user_id'");
	if (!$query){
		die('Error: ' . mysql_error());
		echo '</br></br><a href="../student.php">回到首页</a>';
		
	}
	echo "修改一条记录";
	echo '</br></br><a href="../student.php">回到首页</a>';
?>