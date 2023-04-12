<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../js/bootstrap.min.js">
	<link rel="stylesheet" href="../bootstrap-icons/font/bootstrap-icons.css">
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.js/dist/umd/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<style>
		::-webkit-scrollbar{
			display: none;
		}
	</style>
</head>
<body style="background-image: url(../img/back5.jpg); background-size: 100% 900px;">
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e2d6d3;">
		  <a class="navbar-brand" href="#" id="date"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      
		      <li class="nav-item">
		        <a class="nav-link" href="#"><i class="bi bi-envelope"></i>信息</a>
		      </li>
		      <li class="nav-item dropdown">
		              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
		                <i class="bi bi-graph-up"></i>任务
		              </a>
		              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		                <a class="dropdown-item" href="#"><i class="bi bi-hourglass-split"></i>今日任务</a>
		                <a class="dropdown-item" href="#"><i class="bi bi-hourglass-bottom"></i>未完成任务</a>
		                <a class="dropdown-item" href="#"><i class="bi bi-hourglass"></i>已完成任务</a>
		              </div>
		            </li>
		    </ul>
		  </div>
		</nav>
		
	<h2>修改密码</h2>
	<div style="margin-left: 400px;">
	<form action="updpasswordOK.php" method="post">
	  <div class="form-group col-md-8">
	    <label for="exampleInputEmail1">用户名</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
	  </div>
	  <div class="form-group col-md-8">
	    <label for="exampleInputPassword1">原本密码</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
	  </div>
	  
	  <div class="form-group col-md-8">
	    <label for="exampleInputPassword1">修改密码</label>
	    <input type="password" class="form-control" id="pwd" name="newpass">
	  </div>
	  
	  <div class="form-group col-md-8">
	    <label for="exampleInputPassword1">确认密码</label>
	    <input type="password" class="form-control" id="repwd">
	  </div>
	  <button type="submit" class="btn btn-primary" onclick="change()">提交</button>
	</form>
	</div>
	
<!--列表-->

	
	
	
</body>
</html>
<script type="text/javascript">
	var now = new Date();
	var currentDate = now.getFullYear()+"年"+(now.getMonth() + 1) + "月" +now.getDate()+"日";
	var busDate = now.getFullYear()+"-"+(now.getMonth() + 1) + "-" +now.getDate();
	//将获取到的当前日期的值赋值给input输入框
	document.getElementById("date").innerText=currentDate;
	
	function change(){
		var p=document.getElementById('pwd');
		var pass=document.getElementById('pwd').value;
		var repass=document.getElementById('repwd').value;
		console.log(pass);
		console.log(repass);
		if(pass!=repass){
			window.alert("您两次输入的密码不一致");
			p.focus();
			event.preventDefault();
		}
	}
</script>