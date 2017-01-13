<?php
session_start();
include('../check/conn.php');
	
	echo '<form method="post" action="">用户信息删除</br>
	要删除的用户编号<input name="user_id" type="text"></br>
	<input type="submit" value="删除"></br></form>';
	
if($_POST['user_id']){
	$user_id=$_POST['user_id'];	
	$query4=$db->query("SELECT * FROM `user` WHERE `user_id`='$user_id'");
	
	if( mysqli_num_rows($query4)>0){
		$query=$db->query("SELECT studentId FROM `student` WHERE `user_id`='$user_id'");
		list($studentId)=mysqli_fetch_row($query);
		$query1=$db->query("DELETE FROM `user` WHERE `user`.`user_id`='$user_id'");
		$query2=$db->query("DELETE FROM `student` WHERE `student`.`studentId`='$studentId'");
		$query3=$db->query("DELETE FROM `stu-grade` WHERE `studentId`='$studentId'");
		if (!$query1&&!$query2&&!$query3){
			die('Error: ' . mysql_error());
		}
		else{
			echo "修改一条记录";
		}
				
	}
	else{
		echo '<script>alert("查无此人");</script>';	
	}
		
		
}
echo '</br></br><a href="../teacher.php">回到首页</a>';

?>	
