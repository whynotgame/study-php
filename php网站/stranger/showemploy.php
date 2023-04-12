<?php require("./sessionYZ.php"); ?>
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
	<?php require('./sessiongetemp.php') ?>
	<!--navbar-->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #cce5ff;">
	  <a class="navbar-brand" href="#" id="date"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	     
		  
	      <li class="nav-item dropdown">
	              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
	                <i class="bi bi-graph-up"></i>任务
	              </a>
	              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                <a class="dropdown-item" href="tdtask.php"><i class="bi bi-hourglass-split"></i>今日任务</a>
	                <a class="dropdown-item" href="comtask.php"><i class="bi bi-hourglass"></i>已完成任务</a>
	              </div>
	            </li>
	    </ul>
		
		<div class="btn-group">
		  <button type="button" class="btn btn-info">你好 <?php echo $_SESSION['user1'] ?></button>
		  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
		  </button>
		  <div class="dropdown-menu">
		    <a class="dropdown-item" href="updpassword.php">修改密码</a>
		  </div>
		</div>
		
	  </div>
	</nav>
	
	<!--巨幕-->
	<div class="jumbotron" style="background-image: url(../img/back6.jpg); background-size: 100% 900px; margin: 0 40px;">
	  <h1 class="display-4" style="color: whitesmoke;">坚定</h1>
	  <p class="lead" style="color: whitesmoke;">下苦功，三个字，一个叫下，一个叫苦，一个叫功，一定要振作精神，下苦功。——毛泽东</p>
	  <hr class="my-4">
	  <p style="color: whitesmoke;">一个人只要强烈地坚持不懈地追求，他就能达到目的。——司汤达</p>
	</div>

<!--待处理事件内部处理-->
<?php require('./geteventtime.php'); ?>



	
	<h2 style="margin-top: 20px; margin-left: 40px;">总览事件</h2>
	<!--待处理事件-->
  <div class="row" style="margin-top: 20px;">
	 <div class="media col-sm" style="background-color: #ffff33; margin-left: 55px;">
	  <i class="bi bi-thermometer-half" style="font-size: 80px; align-items: center;color: white;"></i>
	  <div class="media-body">
		  <a href="eventadd.php" style="text-decoration: none;">
	    <h5 class="mt-0" style="padding-top: 35px; color: white;">提交事件</h5>
	    <p style="font-size: 30px; color: white;">总共提交<?php echo $reviewed; ?>条</p>
		</a>
	    
	  </div>
	</div>
	
	<div class="media col-sm" style="background-color: #33adff; margin-left: 55px; ">
	  <i class="bi bi-thermometer-high" style="font-size: 80px; align-items: center;color: white;"></i>
	  <div class="media-body">
		  <a href="showevent.php" style="text-decoration: none;">
			  <h5 class="mt-0" style="padding-top: 35px; color: white;">审核完成</h5>
	          <p style="font-size: 30px; color: white;"><?php echo $pending; ?>条</p>
		  </a>
	    
	  </div>
	</div>
	
	<div class="media col-sm" style="background-color: #ffff33; margin-left: 55px; margin-right: 55px;">
	  <i class="bi bi-thermometer-sun" style="font-size: 80px; align-items: center;color: white;"></i>
	  <div class="media-body">
		  <a href="showcompleted.php" style="text-decoration: none;">
			  <h5 class="mt-0" style="padding-top: 35px; color: white;">最新落实</h5>
	          <p style="font-size: 30px; color: white;"><?php echo $completed; ?>条</p>
		  </a>
	    
	  </div>
	</div>
  </div>
<?php $conn->close(); ?>	
	<!--公告以及签到信息-->
	<div class="row" style="margin: 20px 40px;">
		<!--公告-->
		
		<div class="list-group col-md-8">
			<div style="float: left;">
				<a href="#"  class="list-group-item list-group-item-action active">
			    <h5 class="mb-1" >最新公告</h5>
			</a>
			</div>
			<div style="float: right;position: absolute;right: 20px;top: 0px;">
				<a href="shownews.php" class="list-group-item list-group-item-action active">
			    <h5 class="mb-1" >更多</h5>
			</a>
			</div>
			
			<!--标签一-->
			<?php
			require('./getnewsdata.php');
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
		  <!--标签结束-->
		  
		</div>
		
		<!--签到信息-->
		<div style="width: 33%;">
			<a href="#" class="list-group-item list-group-item-action active">
			    <h5 class="mb-1">员工签到</h5>
			</a>
			<div style="">
			<div class="alert alert-primary col-sm" role="alert" style="width: 25%; float: left; height: 530px;">
			
			
			<div class="spinner-grow text-primary" role="status">
			  <span class="sr-only">Loading...</span>
			</div>
		  签到<p style="font-size: 40px;"><?php echo $col1; ?>次</p>
			  <?php
			  require('./signin.php');
			  ?>
			  <?php if($col3!=1&&isset($_SESSION['user1'])){
			  				  echo '<button type="button" class="btn btn-outline-primary">
			  				  <a href="empsign.php">点击签到</a>
			  				  </button>
			  				  ';
			  }
			  else{
			  				 
			  }?>
		</div>
		</div>
		<div class="alert alert-warning col-sm" role="alert" style="width: 25%; float: left; height: 530px;">
			<div class="spinner-grow text-warning" role="status">
			  <span class="sr-only">Loading...</span>
			</div>
		  签出<p style="font-size: 40px;"><?php echo $col2; ?>次</p>
		  
		  <?php require('./signout.php') ?>
		  <?php if($col4!=1&&$col5==1){
		  				  echo '<button type="button" class="btn btn-outline-warning" ><a href="empsignout.php" style="color: #e6e600;">点击签出</a></button>';
		  }
		  else{
		  				 
		  }?>
		</div>
		<div class="alert alert-primary col-sm" role="alert" style="width: 25%; float: left; height: 530px;">
		  本月签到占比<?php echo round($col1/30*100); ?>%
		</div>
		<div class="alert alert-warning col-sm" role="alert" style="width: 25%; float: left; height: 530px;">
		  本月签出占比<?php echo round($col2/30*100); ?>%
		</div>
		</div>
		
		
		
		
		
		
		
	</div>
	
	
	
	
	
	
	
	
	<div class="container">
		<h4>优秀员工</h4>
  <div class="row" id="item">
	  
	  <?php  require('../employee/geteployeesdata.php'); ?>
	  <?php
	    foreach($res as $row){
	  				
	  ?>
	<div class="card col" style="float: left; margin-left: 5px;">
	  <img src="<?php echo $row['emppicture'] ?>" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title"><?php echo $row['empname'] ?></h5>
	    <p class="card-text" style="color: #007BFF;"><?php echo $row['say'] ?></p>
	  </div>
	</div>
	<?php
	  }
	  $conn->close();
	  ?>
	
	
	
	
  </div>

	</div>
	
	
</body>
</html>

<script type="text/javascript">
	window.onload=function(){
		<?php
		  // $date=date('Y-m-d');
		  // require("../conn.php");
		  // $conn->query("set names utf8");
		  // $sql="";
		  // $re=$conn->prepare($sql);
		  // $re->bind_param('s',$date);
		  // $res=$re->execute();
		  
		?>
	}
	var now = new Date();
	var currentDate = now.getFullYear()+"年"+(now.getMonth() + 1) + "月" +now.getDate()+"日";
	var busDate = now.getFullYear()+"-"+(now.getMonth() + 1) + "-" +now.getDate();
	//将获取到的当前日期的值赋值给input输入框
	document.getElementById("date").innerText=currentDate;
</script>