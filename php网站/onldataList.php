<?php require("./sessionYZ.php") ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="css/my.css">
	<link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js/dist/umd/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="flotr2.min.js" type="text/javascript" charset="utf-8"></script>
	<title></title>
	<style>
		::-webkit-scrollbar{
			display: none;
		}
	</style>
	
</head>
<body>
	
	
	<div class="row">
	  <div class="col-2">
	    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<div style="height: 80px;margin: 0 auto;">
							<img src="img/comlogo.jpg" alt="" style="height: 80px;object-fit: scale-down;">
						</div>
			
	      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="userList.php" role="tab" aria-controls="v-pills-home" aria-selected="true" onclick="user()"><i class="bi bi-pip" style="margin-right: 2px;"></i>账号信息</a>
			  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-profile" aria-selected="false" onclick="department()"><i class="bi bi-person-lines-fill" style="margin-right: 2px;"></i>部门信息</a>
	      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" onclick="allemployee()"><i class="bi bi-person-video2" style="margin-right: 2px;"></i>人员信息</a>
	      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" onclick="sign()">签到信息</a>
		  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" onclick="ince()">员工奖惩</a>
		  <!-- 卡片 -->
	    </div>
		<div class="card mb-3" style="max-width: 540px;">
		  <div class="row no-gutters">
		    <div class="col-md-4" class="media">
				<img src="img/xguanli.jpg" class="mr-3" alt="..." style="width: 150px; height: 130px; border-radius: 50% 50%;">
		      <!-- <img src="..." alt="..."> -->
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <!-- <h5 class="card-title">管理员信息</h5> -->
		<div class="btn-group" style="background-color: white;">
		  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="background-color: white; color: black; border: 0;">
		    <?php
		    //session_start();
		    	echo $_SESSION['user2'];
		   
			//echo $_SESSION['empid']
		    //session_start();
		    //echo $_SESSION['user']; ?>信息
		  </button>
		  <div class="dropdown-menu dropdown-menu-right">
		    <button class="dropdown-item" type="button"><a href="./logout.php" style="color: black;">退出登录</a></button>
			
		  </div>
		</div>
		        <div style="margin-top: 60px;margin-left: -70px;"><p class="card-text" display="block">能力越大，责任越大。注意删除，小心谨慎</p></div>
		        
		      </div>
		    </div>
		  </div>
		</div>
		
		
		<!-- 卡片结束 -->
		
	  </div>
	  <div class="col-9">
	    <div class="tab-content" id="v-pills-tabContent">
	      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
			  
			  <div style="position: fixed;z-index: 100; top: 0;">
			  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #007BFF; width: 1500px;">
			  <a class="navbar-brand" href="#" style="color: white;">导航</a>
			  <a class="navbar-brand" href="#" style="color: white;"><div class="dateWeather" id="dateWeather">今日日期</div></a>
			  
			  
			  
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav mr-auto">
			        <li class="nav-item active">
			                <a class="nav-link" href="#" onclick="gopicture()" style="color: white;">图表<span class="sr-only">(current)</span></a>
			              </li>
			        <li class="nav-item dropdown">
			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" style="color: white;">
			            任务
			          </a>
			          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <a class="dropdown-item" href="#" onclick="sol()">员工提交</a>
			            <a class="dropdown-item" href="#" onclick="publish()">发布任务</a>
							<div class="dropdown-divider"></div>
			            <a class="dropdown-item" href="#" onclick="showtask()">查看所有发布任务</a>
						
						
						
				        <div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#" onclick="passtask()">任务通过</a>
						
			            
			          </div>
			        </li>
			        
			      </ul>
			      <form class="form-inline my-2 my-lg-0">
			        
			        
			      </form>
			    </div>
			  </nav>
			  </div>
			  
			  
			  <iframe src="./user/userList.php" class="col-md-12" border="0" frameborder="0" style="height: 600px;margin-top: 80px;" id="stand"></iframe>
		  </div>
	    </div>
		<div style="font-size: 34px;">寄语</div>
		<div class="col-9" style="float: left;">
			<ul class="list-unstyled">
			  <li class="media">
			    <img src="img/xiaowang.jpg" class="mr-3" alt="..." style="height: 150px;width: 130px;">
			    <div class="media-body">
			      <h5 class="mt-0 mb-1">创始人赵三丰</h5>
			      <p>我们要多设想一些美好的事物，比如健康、强壮、富裕和幸福，将那些贫困、疾病、恐惧和焦虑驱赶出我们的精神世界，就像把垃圾倒在离家很远的地方一样。抛弃它们吧！尽量避开和远离那些对生活失去希望的人。</p>
			    </div>
			  </li>
			  <li class="media my-4">
			    <img src="./img/xiaoli.jpg" class="mr-3" alt="..." style="height: 150px;width: 130px;">
			    <div class="media-body">
			      <h5 class="mt-0 mb-1">创始人李香</h5>
			      <p>为了向别人、向世界证明自己而努力拼搏，而一旦你真的取得了成绩，才会明白：人无须向别人证明什么，只要你能超越自己。</p>
			    </div>
			  </li>
			  <li class="media">
			    <img src="./img/xiaozhang.jpg" class="mr-3" alt="..." style="height: 150px;width: 130px;">
			    <div class="media-body">
			      <h5 class="mt-0 mb-1">创始人王或</h5>
			      <p>坚持把简单的事情做好就是不简单，坚持把平凡的事情做好就是不平凡。所谓成功，就是在平凡中做出不平凡的坚持。</p>
			    </div>
			  </li>
			</ul>
		</div>
		
	  </div>
	</div>
	
	
	
</body>
</html>
<script type="text/javascript">

  var now = new Date();
  var currentDate = now.getFullYear()+"-"+(now.getMonth() + 1) + "-" +now.getDate();
  //将获取到的当前日期的值赋值给input输入框
  document.getElementById("dateWeather").innerText=currentDate;
  
  
  //ifram刷新函数
  function clearFrame(){
	  var stand = document.getElementById('stand');
	  stand.setAttribute("src","about:blank");
  }
  
  
  function department(){
	  var stand = document.getElementById('stand');
	  stand.setAttribute("src","./department/departmentlist.php")
  }
  
  function user(){
  	  var stand = document.getElementById('stand');
  	  stand.setAttribute("src","./user/userList.php")
  }
  
  function allemployee(){
  	  var stand = document.getElementById('stand');
  	  stand.setAttribute("src","./allemployee/search.php")
  }
  
  function sign(){
  	  var stand = document.getElementById('stand');
  	  stand.setAttribute("src","./sign/signList.php")
  }
  
  function sol(){
	  clearFrame();
  	  var stand = document.getElementById('stand');
  	  stand.setAttribute("src","./solevent/onlshowsol.php");
  }
  
  function ince(){
  	  var stand = document.getElementById('stand');
  	  stand.setAttribute("src","./incetive/incetiveList.php")
  }
  
  function publish(){
  	  var stand = document.getElementById('stand');
  	  stand.setAttribute("src","./task/publishtask.php")
  }
  
  function showtask(){
  	  var stand = document.getElementById('stand');
  	  stand.setAttribute("src","./task/showtask.php")
  }
  
  function passtask(){
  	  var stand = document.getElementById('stand');
  	  stand.setAttribute("src","./task/passtask.php")
  }
  
  function gopicture(){
  	  var stand = document.getElementById('stand');
  	  stand.setAttribute("src","./user/zhexian.php")
  }
  
  
</script>
