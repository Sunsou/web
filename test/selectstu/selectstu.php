<?php
session_start();
include('../check/conn.php');
if($type==0){
	
	$query1=$db->query("SELECT * FROM `student` WHERE `user_id`='$user_id'");
	if(mysqli_num_rows($query1)<=0){
		echo '<script>alert("个人信息未添加！");
		window.location.href="../student.php"</script>';	
	}
	else{
		
	$query2 = $db->query("select * from student where user_id='$user_id'");
	list($user_id,$studentId,$grade,$profe,$class,$sex,$phone)=mysqli_fetch_row($query2);
	$query3 = $db->query("select * from profession where profe='$profe'");
	list($profe,$profeName)=mysqli_fetch_row($query3);
	
	
	echo '姓名:';echo $username;
	echo '</br>学号:';echo $studentId;
	echo '</br>年级:';echo $grade;
	echo '</br>专业:';echo $profeName;
	echo '</br>班级:';echo $class;
	echo '</br>性别:';echo $sex;
	echo '</br>电话:';echo $phone;
	
	echo '</br></br><a href="../student.php">回到首页</a>';
	}
}
else if( $type==1){
	echo '<form method="post" action="selectstu1.php">输入学号<input name="input" type="text"><input type="submit" value="查询"></br></form>';
	echo '</br></br><a href="../teacher.php">回到首页</a>';
	
}


?>	


