<?php
session_start();
include('../check/conn.php');
$studentId=$_POST['input'];
if(!$studentId){ echo '<script>alert("请输入学号查询！");window.location.href="selectgra.php";</script>';}
else{
	$query1 = $db->query("SELECT * FROM `student` WHERE `studentId`=$studentId");
	if(mysqli_num_rows($query1)<1){
		echo'<script>alert("查无此人");
		window.location.href="../teacher.php"</script>';	
		
	}
	else{	
		$query2 = $db->query(" SELECT * FROM `stu-grade` WHERE `studentId`=$studentId");
		$rows=mysqli_num_rows($query2);
		echo '学号为:';echo $studentId;echo '</br>';
		for($i=1;$i<=$rows;$i++){
			list($studentId,$lesson,$grade)=mysqli_fetch_row($query2);
			$query3 = $db->query("SELECT * FROM `stu-lesson` WHERE `lesson`=$lesson");
			list($lesson,$lessonName)=mysqli_fetch_row($query3);
			echo '课程:';echo $lessonName;
			echo '&nbsp;&nbsp;&nbsp;成绩:';echo $grade;
			echo '</br>';
		}
		
		echo '</br></br><a href="../teacher.php">回到首页</a>';
	}		
}
?>