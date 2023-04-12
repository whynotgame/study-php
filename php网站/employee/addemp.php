<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../js/bootstrap.min.js">
	<title></title>
	<style>
		::-webkit-scrollbar{
			display: none;
		}
	</style>
</head>
<body>
	<h4>添加一个员工</h4>
	<div class="container-fluid">
		
	  <form action="addempok.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">员工名</label>
		    <input type="text" class="form-control" name="empname" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">所属部门</label>
		    <input type="text" class="form-control" name="emdepartment" >
		  </div>
          <div class="form-group">
            <label for="exampleInputPassword1">入职状态</label>
            <input type="text" class="form-control" name="empstate" >
          </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">基本工资</label>
		    <input type="text" class="form-control" name="basemoney" >
		  </div>
		  
		  <button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</body>

</html>
