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
		<h4>修改人员信息</h4>
		<?php
		
		$Uid=$_GET['Uid'];
		require("../conn.php");
		$conn->query("set names utf8");
		$sql="select empname,empstate,basemoney,emdepartment,empsign,empsignout from employee where id=?";
		$rs=$conn->prepare($sql);
		$rs->bind_param('i',$Uid);
		$rs->execute();
		$rs->bind_result($col1,$col2,$col3,$col4,$col5,$col6);
		$rs->fetch();
		?>
	  <form action="updempok.php?Uid=<?php echo $Uid; ?>" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">员工名字</label>
		    <input type="text" class="form-control" name="empname" value="<?php echo $col1 ?>" readonly="readonly" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">入职状态</label>
		    <input type="text" class="form-control" name="empstate" value="<?php echo $col2 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">基本工资</label>
		    <input type="text" class="form-control" name="basemoney" value="<?php echo $col3 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">所在部门</label>
		    <input type="text" class="form-control" name="emdepartment" value="<?php echo $col4 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">签到数</label>
		    <input type="number" class="form-control" name="empsign" value="<?php echo $col5 ?>" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">签出数</label>
		    <input type="number" class="form-control" name="empsignout" value="<?php echo $col6 ?>" >
		  </div>
		  <div class="form-group">
		  			  <label for="exampleFormControlFile1">选择头像</label>
		  			  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
		  </div>
		  <button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</body>
</html>