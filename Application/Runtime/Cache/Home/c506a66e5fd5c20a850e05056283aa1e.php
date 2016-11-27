<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>广州航海学院学生注册与登陆页面</title>
	<script src="/github/register_login_tp3_jquery/Public/js/jquery-3.1.1.min.js"></script>

<style>
header{
	background: gray;
	color: white;
	padding: 8px;
	text-align: center;
}	
nav{
	background: #403f3f;
	height: 300px;
	width: 100px;
	float: left;
	color: white;
	text-align: center;
	line-height: 30px;
}
nav span{
	cursor:pointer;
	color:white;
}
nav a{
	color:white;
}
nav span:hover{
	color: red;
}
section{

}
footer{
 	background:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}
label{
	display: inline-block;
	width: 80px;
}
</style>

<script>


</script>

</head>
<body>
	<header>
		<h1>广州航海学院学生个人中心</h1>
	</header>

	<nav>
		<span id="admin">欢迎您！<br>
<?php echo ($data['name']); ?>
		</span><br>
		<span id="" ><a href="<?php echo U('logout');?>">登出</a></span>

	</nav>

	<section>
		
	</section>

	<footer>
		Copyright 广州航海学院 2016
	</footer>
</body>
</html>