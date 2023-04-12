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
	<h3>部门信息</h3>
	<h4><a href="addDepartment.php">添加部门</a></h4>
	<table class="table" style="background-color: #fafafa;border: 1px solid lightgray;">
	  <thead>
	    <tr>
	      <th scope="col">部门号</th>
	      <th scope="col">部门名称</th>
		  <th scope="col">部门用途</th>
	      <th scope="col">部门人数</th>
		  <th scope="col">操作</th>
	    </tr>
	  </thead>
	  <tbody>
		  <?php require('getdepartmentdata.php'); ?>
		  <?php
		    foreach($res as $row){
				
		  ?>
	    <tr>
	      <th scope="row"><?php echo $row['depid'] ?></th>
	      <td><?php echo $row['depname'] ?></td>
	      <td><?php echo $row['depuse'] ?></td>
	      <td><?php echo $row['depnum'] ?></td>
		  <td><a href="updDepartment.php?Uid=<?php echo $row["depid"] ?>">修改</a> | <a href="delDepartment.php?Uid=<?php echo $row["depid"] ?>">删除</a> | <a href="../employee/employeeList.php?Uid=<?php echo $row["depid"] ?>">员工信息</a></td>
	    </tr>
		<?php
	    }
		$conn->close();
		?>
		
	  </tbody>
	</table>
</body>
</html>


