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
	cursor:pointer 
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

	$(function(){

		/**
		 * 注册与登陆页面切换
		 */
		
		$('#register').click(function(){
			$('.register').css('display','block');
			$('.login').css('display','none');
		})
		$('#login').click(function(){
			$('.register').css('display','none');
			$('.login').css('display','block');
		})

	})	

	/**
	 * 注册信息校验与ajax提交
	 */
	function ajax_reg(){
		var name = $('#name').val()
		var class_reg = $('#class_reg').val()
		var id = $('#id').val()
		var tel = $('#tel').val()
		var email = $('#email').val()
		var pwd = $('#pwd').val()
		var pwd2 = $('#pwd2').val()

		if (pwd != pwd2) {
			alert('两次密码不一致')
		}else{
			$.ajax({
				url:"<?php echo U('register');?>",
				data:{
					'name':name,
					'class':class_reg,
					'id':id,
					'tel':tel,
					'email':email,
					'pwd':pwd,
					'pwd2':pwd2,
					'type':'register'
				},
				type:'post',
				success:function(data){
					if (!$.isNumeric(data[0])) {
						alert(data[0]);
					}else if(data[0] == 1){
						alert('注册成功！')
						location.href = "<?php echo U(Admin/index);?>"
					
					}
				}
			})
		}


		return false;
	}		

	/**
	 * 登陆信息校验与ajax提交
	 */
	function ajax_log(){
		var id = $('#id_log').val()
		var pwd = $('#pwd_log').val()
		$.ajax({
			url:"<?php echo U('login');?>",
			type:'post',
			data:{
				'id':id,
				'pwd':pwd,
				'type':'login'
			},
			success:function(data){
				if (data == 1) {
					alert('登录成功')
					location.href = "<?php echo U(Admin/index);?>"
				}else{
					alert('登录失败');
				}

			}
		})
		return false;
	}
</script>

</head>
<body>
	<header>
		<h1>广州航海学院学生注册与登陆页面</h1>
	</header>

	<nav>
		<span id="register">注册</span><br>
		<span id="login">登陆</span>
	</nav>

	<section>
		<div class="register">
			<form onsubmit="return ajax_reg();">
				<fieldset>
					<legend>学生注册</legend>
					<label for="name">姓名</label>
					<input type="text" name="name" id="name" placeholder="请输入姓名" required><br>
					<label for="class_reg">班级</label>
					<input type="text" name="class_reg" id="class_reg" placeholder="计商142" required><br>
					<label for="id">学号</label>
					<input type="text" name="id" id="id" placeholder="请填写12位学号" pattern="[\d]{12}" required><br>
					<label for="tel">手机</label>
					<input type="tel" name="tel" id="tel" placeholder="请输入手机" required><br>
					<label for="email">邮箱</label>
					<input type="email" name="email" id="email" placeholder="请输入邮箱" required><br>
					<label for="pwd">密码</label>
					<input type="password" name="pwd" id="pwd" placeholder="请输入6位以上密码" required><br>
					<label for="pwd2">确认密码</label>
					<input type="password" name="pwd2" id="pwd2" placeholder="请确认密码" required><br>
					<input type="submit" value="注册">
				</fieldset>
			</form>
		</div>
		<div class="login" style="display:none">
			<form onsubmit="return ajax_log();">
				<fieldset>
					<legend>学生登陆</legend>
					<label for="id_log">学号</label>
					<input type="text" name="id_log" id="id_log" placeholder="请填写学号" pattern="[0-9]{12}" required><br>
					<label for="pwd_log">密码</label>
					<input type="password" name="pwd_log" id="pwd_log" placeholder="请输入密码" required><br>
					<input type="submit" value="登陆">
				</fieldset>
			</form>
		</div>
	</section>

	<footer>
		Copyright 广州航海学院 2016
	</footer>
</body>
</html>