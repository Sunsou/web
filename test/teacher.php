<?php include('check/check.php');?>
<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<title>教务系统管理首页</title>

<link href="js_css/stylesheet.css" rel="stylesheet" />

<script src="js_css/mouse.js"></script>

</head>
<body>

<header>
	<span><?php echo $_SESSION['user'];?>欢迎你</span>
    <span><a href="index.php">退出</a></span>
</header>
<div id="student">
	<cite>学生信息</cite>
    <ul id='studentselect'>
    	<li><a href="selectstu/selectstu.php">学生信息查询</a></li>
        <li><a href="addstu/addstu.php">学生信息添加</a></li>
        <li><a href="revisestu/revisestu.php">学生信息修改</a></li>
        <li><a href="delete/stu.php">学生信息删除</a></li>
    </ul>
</div>

<div id="grade">
	<cite>成绩操作</cite>
    <ul id='gradeselect'>
    	<li><a href="selectgra/selectgra.php">成绩查询</a></li>
        <li><a href="javascript:;">成绩添加</a></li>
        <li><a href="javascript:;">成绩修改</a></li>
        <li><a href="delete/grade.php">成绩删除</a></li>
    </ul>
</div>

<div id="lesson">
	<cite>课程操作</cite>
    <ul id='lessontselect'>
    	<li><a href="selectles/selectles.php">课程查询</a></li>
        <li><a href="javascript:;">课程添加</a></li>
        <li><a href="javascript:;">课程修改</a></li>
        <li><a href="delete/lesson.php">课程删除</a></li>
    </ul>
</div>
</body>
</html>