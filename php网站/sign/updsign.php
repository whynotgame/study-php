<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../js/bootstrap.min.js">
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<h4>修改用户信息</h4>
		<?php
		
		$Uid=$_GET['Uid'];
		require("../conn.php");
		$conn->query("set names utf8");
		$sql="select signinid,empid,signintime,signin,signout from empsign where signinid=?";
		$rs=$conn->prepare($sql);
		$rs->bind_param('i',$Uid);
		$rs->execute();
		$rs->bind_result($col1,$col2,$col3,$col5,$col6);
		$rs->fetch();
		?>
	  <form action="updsignOK.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">签到id号</label>
		    <input type="text" class="form-control" name="signinid" value="<?php echo $col1 ?>" readonly="readonly" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">员工id号</label>
		    <input type="text" class="form-control" name="empid" value="<?php echo $col2 ?>" readonly="readonly" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">签到日期</label>
		    <input type="text" class="form-control" name="signintime" value="<?php echo $col3 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">签到</label>
		    <input type="number" class="form-control" name="signin" value="<?php echo $col5 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">签出</label>
		    <input type="number" class="form-control" name="signout" value="<?php echo $col6 ?>" >
		  </div>
		  <button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</body>
</html>