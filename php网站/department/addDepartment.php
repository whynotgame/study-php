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
	  <form action="addDepartmentOK.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">部门名称</label>
		    <input type="text" class="form-control" name="depname" value="" >
		    
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">部门用途</label>
		    <input type="text" class="form-control" name="depuse" value="" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">部门人数</label>
		    <input type="text" class="form-control" name="depnum" value="" >
		  </div>
		  <button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</body>

</html>
