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
		$sql="select uname,password,details,isemp,isman from userdata where id=?;";
		$rs=$conn->prepare($sql);
		$rs->bind_param('i',$Uid);
		$rs->execute();
		$rs->bind_result($col1,$col2,$col3,$col4,$col5);
		$rs->fetch();
		?>
	  <form action="updloguserok.php?uid=<?php echo $Uid; ?>" method="post">
		  <div class="form-group">
		    <label for="exampleInputPassword1">用户名</label>
		    <input type="text" class="form-control" name="username" value="<?php echo $col1 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">密码</label>
		    <input type="text" class="form-control" name="password" value="<?php echo $col2 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">细节补充</label>
		    <input type="text" class="form-control" name="detail" value="<?php echo $col3 ?>" >
		  </div>
		  <button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</body>
</html>