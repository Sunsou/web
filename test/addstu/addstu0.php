<?php
session_start();
include('../check/conn.php');
	

	$studentId=$_POST['studentId'];
	$grade=$_POST['grade'];
	$profe=$_POST['profe'];
	$class=$_POST['class'];
	$sex=$_POST['sex'];
	$phone=$_POST['phone'];
	$query=$db->query("INSERT INTO `student`(`user_id`, `studentId`, `grade`, `profe`, `class`, `sex`, `phone`) VALUES ('$user_id','$studentId','$grade','$profe','$class','$sex','$phone')");
	if (!$query){
		die('Error: ' . mysql_error());
		echo '</br></br><a href="../student.php">回到首页</a>';
	}
	echo "添加一条记录";
	echo '</br></br><a href="../student.php">回到首页</a>';
?>