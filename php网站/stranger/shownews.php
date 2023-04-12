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
<body style="background-color: #F4F4F4;">
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
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="点击搜索" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
	
<div style="margin: 20px 10%;background-color: white; width: 80%; height: 500px;">
	<?php
	
	require("../conn.php");
	$conn->query("set names utf8");
	$sql="SELECT * FROM news;";
	$res=$conn->query($sql);
	foreach($res as $row){
	?>
	<a href="#" class="list-group-item list-group-item-action">
	  <div class="d-flex w-100 justify-content-between">
	    <h5 class="mb-1"><?php echo $row['hader'] ?></h5>
	    <small><?php echo $row['newwen'] ?></small>
	  </div>
	  <p class="mb-1"><?php echo $row['newcontent'] ?></p>
	  <small><?php echo $row['printer'] ?></small>
	</a>
	<?php
	}
	$conn->close();
	?>
</div>

	
</body>
</html>
<script type="text/javascript">
	var now = new Date();
	var currentDate = now.getFullYear()+"年"+(now.getMonth() + 1) + "月" +now.getDate()+"日";
	var busDate = now.getFullYear()+"-"+(now.getMonth() + 1) + "-" +now.getDate();
	//将获取到的当前日期的值赋值给input输入框
	document.getElementById("date").innerText=currentDate;
</script>