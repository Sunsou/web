<?php
	session_start();
	if(!(isset($_SESSION['user']))||!(isset($_SESSION['password']))){
		echo'<script>alert("您没有正常登录，请重新登录本系统！");
		window.location.href="index.php";</script>'; 
	}
?>