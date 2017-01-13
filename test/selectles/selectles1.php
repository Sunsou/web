<?php
session_start();
include('../check/conn.php');
$studentId=$_POST['input'];

if(!$studentId){ echo '<script>alert("请输入学号查询！");window.location.href="selectles.php";</script>';}
else{
	$query1 = $db->query("SELECT * FROM `student` WHERE `studentId`=$studentId");
	if(mysqli_num_rows($query1)<1){
		echo '查无此人';
		echo '</br></br><a href="../teacher.php">回到首页</a>';
	}
	else{
		echo '学号:';echo $studentId;echo '</br>';
		$query3 = $db->query("SELECT lesson FROM `stu-grade` WHERE `studentId`='$studentId'");
		$rows=mysqli_num_rows($query3);
		echo '课程总数:';echo $rows; echo '</br>';
		for($i=1;$i<=$rows;$i++){
			list($lesson)=mysqli_fetch_row($query3);
			$query1 = $db->query("SELECT lessonName FROM `stu-lesson` WHERE `lesson`='$lesson'");
			list($lessonName)=mysqli_fetch_row($query1);
			echo $lessonName;echo '</br>';
		}	
		echo '</br></br><a href="../teacher.php">回到首页</a>';		
	}
		
}
		
	
?>