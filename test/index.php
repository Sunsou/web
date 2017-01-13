<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>登录注册页</title>
<style>
body{
	margin:0px;
	}
</style>
<script>
	function check_user(form){
		if(form.user.value==""){
			alert('请输入用户名');
			form.user.select();
			return(false);	
		}
		if(form.password.value==""){
			alert('请输入登录密码！');
			form.password.select();
			return(false);	
		}
		return(true);	
	}
</script>
</head>
<body>
<div id="container" style="margin:0 auto; width:600px; border:#69F 2px solid; margin-top:200px; background-color:#69e">
	<h1 style="text-align:center">计算机学院教务管理系统</h1>
    <form method='post' id='loginForm' action="check/checkLogin.php" onSubmit="return check_user(this)">
    	<table width="600px" border="0" align="center" cellpadding="0" cellspacing="0">
        	<tr><td colspan="2"><h2 style="margin-left:100px">用户登录</h2></td></tr>
            <tr>
           		<td style="padding-left:100px">用户名：</td>
            	<td><input name="user" type="text" size="18"/></td>
            </tr>
            <tr>
           		<td style="padding-left:100px">密码：</td>
            	<td><input name="password" type="password" size="18"/></td>
            </tr>
            <tr>
            	<td colspan="2" style="text-align:center; height:40px; line-height:40px;"><input type="radio" name="type" value="0" checked/>学生&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="1"/>教师</td>
            </tr>
            <tr>
            	<td colspan="2" style="text-align:center; height:40px; line-height:40px;"><input type="submit" name="Submit" value="登录" onClick="check_user()"/>&nbsp;&nbsp;&nbsp;<input type="reset" name="Submit" value="重置"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>