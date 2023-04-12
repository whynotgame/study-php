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
		<h4>修改部门信息</h4>
		<?php
		
		$Uid=$_GET['Uid'];
		require("../conn.php");
		$conn->query("set names utf8");
		$sql="select depid,depname,depuse,depnum from department where depid=?";
		$rs=$conn->prepare($sql);
		$rs->bind_param('i',$Uid);
		$rs->execute();
		$rs->bind_result($col1,$col2,$col3,$col4);
		$rs->fetch();
		?>
	  <form action="updDepartmentOK.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">部门号</label>
		    <input type="number" class="form-control" name="depid" value="<?php echo $col1 ?>" readonly="readonly" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">部门名称</label>
		    <input type="text" class="form-control" name="depname" value="<?php echo $col2 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">部门用途</label>
		    <input type="text" class="form-control" name="depuse" value="<?php echo $col3 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">部门人数</label>
		    <input type="number" class="form-control" name="depnum" value="<?php echo $col4 ?>" >
		  </div>
		  <button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</body>
</html>