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
	  <form action="addincetiveOK.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputPassword1">奖惩原因</label>
		    <textarea rows="3" class="form-control" name="incerea" value="" ></textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">员工号</label>
		    <input type="text" class="form-control" name="empid" value="" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">部门号</label>
		    <input type="text" class="form-control" name="depid" value="" >
		  </div>
		  <button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</body>

</html>
