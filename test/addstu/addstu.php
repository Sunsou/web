<?php
session_start();
include('../check/conn.php');


if($type==0){
	$query1=$db->query("SELECT * FROM `student` WHERE `user_id`='$user_id'");
	if(mysqli_num_rows($query1)>0){
		echo '<script>alert("个人信息已添加！");
		window.location.href="../student.php"</script>';
	}
	else{
		echo '<form method="post" action="addstu0.php">个人信息录入</br>
	学号<input name="studentId" type="text"></br>
	年级<input name="grade" type="text"></br>
	专业编号<input name="profe" type="text"></br>
	班级<input name="class" type="text"></br>
	性别（M或W）<input name="sex" type="text"></br>
	电话<input name="phone" type="text"></br>
	<input type="submit" value="录入"></br></form>';
	
	echo '</br></br><a href="../student.php">回到首页</a>';
	}
}
else if( $type==1){
	echo '<form method="post" action="addstu1.php">用户信息录入</br>
	用户编号<input name="user_id" type="text"></br>
	用户名<input name="username" type="text"></br>
	密码<input name="password" type="text"></br>
	是否为管理员<input name="is_admin" type="text"></br>
	<input type="submit" value="录入"></br></form>';
	
	echo '</br></br><a href="../teacher.php">回到首页</a>';
}

?>	
