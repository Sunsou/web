<?php
session_start();
include('conn.php');
$type = $_POST['type'];
if($type == 1){//登录用户为教师（管理员）
	$user = $_POST['user'];
	$password = $_POST['password'];
	$query = $db->query("select * from user where is_admin=1 and username='$user' and password='$password'");
	if(mysqli_num_rows($query)>0){
		$_SESSION['user']=$user;
		$_SESSION['password']=$password;
		$_SESSION['type']=$type;
		echo'<script>window.location.href="../teacher.php"</script>';	
	}
	else{
		echo'<script>alert("您输入的用户名或密码不正确！");
		window.location.href="../index.php"</script>';	
		
	}
}
if($type == 0){//登录用户为学生
	$username = $_POST['user'];
	$password = $_POST['password'];
	$query = $db->query("select * from user where is_admin=0 and username='$username' and password='$password'");
	if(mysqli_num_rows($query)>0){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['type']=$type;
		list($user_id,$username,$password,$is_admin)=mysqli_fetch_row($query);
		$_SESSION['user_id']=$user_id;
		echo'<script>window.location.href="../student.php"</script>';				
	}
	else{
		echo'<script>alert("您输入的用户名或密码不正确！");
		window.location.href="../index.php"</script>';			
	}
}
?>