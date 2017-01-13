<?php
session_start();
include('../check/conn.php');
if($type==0){
		
	$query1 = $db->query("select studentId from student where user_id='$user_id'");
	list($studentId)=mysqli_fetch_row($query1);
	$query2 = $db->query(" SELECT * FROM `stu-grade` WHERE `studentId`=$studentId");
	$rows=mysqli_num_rows($query2);
	for($i=1;$i<=$rows;$i++){
		list($studentId,$lesson,$grade)=mysqli_fetch_row($query2);
		$query3 = $db->query("SELECT * FROM `stu-lesson` WHERE `lesson`=$lesson");
		list($lesson,$lessonName)=mysqli_fetch_row($query3);
		echo '课程:';echo $lessonName;
		echo '成绩:';echo $grade;
		echo '</br>';
	}
	
		echo '</br></br><a href="../student.php">回到首页</a>';
}
else if( $type==1){
	echo '<form method="post" action="selectgra1.php">输入学号<input name="input" type="text"><input type="submit" value="查询"></br></form>';
	
		echo '</br></br><a href="../teacher.php">回到首页</a>';
}
?>	


