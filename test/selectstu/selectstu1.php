<?php
session_start();
include('../check/conn.php');
$studentId=$_POST['input'];
if(!$studentId){ echo '<script>alert("请输入学号查询！");window.location.href="selectstu.php";</script>';}
else{
	$query1 = $db->query("SELECT * FROM `student` WHERE `studentId`=$studentId");
	if(mysqli_num_rows($query1)<1){
		echo '查无此人';
		echo '</br></br><a href="../teacher.php">回到首页</a>';
	}
	else{
		$query1 = $db->query("select * from student where studentId='$studentId'");
		list($user_id,$studentId,$grade,$profe,$class,$sex,$phone)=mysqli_fetch_row($query1);
		$query2 = $db->query("select * from user where user_id='$user_id'");
		list($user_id,$username,$password,$is_admin)=mysqli_fetch_row($query2);
		$query3 = $db->query("select * from profession where profe='$profe'");
		list($profe,$profeName)=mysqli_fetch_row($query3);
	
		echo '姓名:';echo $username;
		echo '</br>学号:';echo $studentId;
		echo '</br>年级:';echo $grade;
		echo '</br>专业:';echo $profeName;
		echo '</br>班级:';echo $class;
		echo '</br>性别:';echo $sex;
		echo '</br>电话:';echo $phone;
		echo '</br></br><a href="../teacher.php">回到首页</a>';
		
	}
}
?>