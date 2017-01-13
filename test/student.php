<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>教务系统学生首页</title>

<link href="js_css/stylesheet.css" rel="stylesheet" />

<script src="js_css/mouse.js"></script>
<script>
	var box=document.getElementById('studentselect'),
		as=box.getElementsByTagName('a'),
		ifr=document.getElementById('ifr');
	as[0].onclick = function(){
		var url='teacher.php';
		ifr.src=url; 
	}
</script>

</head>
<body>

<section name='#this'>
<header>
	<span><?php session_start();echo $_SESSION['username'];?>同学，欢迎你</span>
    <span><a href="index.php">退出</a></span>
</header>
<div id="student">
	<cite>个人信息</cite>
    <ul id='studentselect'>
    	<li><a href="selectstu/selectstu.php">学生信息查询</a></li>
        <li><a href="addstu/addstu.php">学生信息录入</a></li>
        <li><a href="revisestu/revisestu.php">学生信息修改</a></li>
    </ul>
</div>

<div id="grade"><cite><a href="selectgra/selectgra.php">成绩查询</a></cite></div>

<div id="lesson"><cite><a href="selectles/selectles.php">课程查询</a></cite></div>
</section>
</body>
</html>