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
	<h3><a href="addemp.php">添加一个员工</a></h3>
	<table class="table" style="background-color: #fafafa;border: 1px solid lightgray;">
	  <thead>
		  <tr scope="col">人员信息</tr>
	    <tr>
	      <th scope="col">id号</th>
	      <th scope="col">员工名</th>
	      <th scope="col">职位状态</th>
	      <th scope="col">基本工资</th>
		  <th scope="col">照片</th>
		  <th scope="col">操作</th>
	    </tr>
	  </thead>
	  <tbody>
		  <?php require('getemployeedata.php'); ?>
		  <?php
		    foreach($res as $row){
				
		  ?>
	    <tr>
	      <th scope="row"><?php echo $row['id'] ?></th>
	      <td><?php echo $row['empname'] ?></td>
	      <td><?php echo $row['empstate'] ?></td>
	      <td><?php echo $row['basemoney'] ?></td>
		  <td><?php echo $row['emppicture'] ?></td>
		  <td><a href="../allemployee/updemp.php?Uid=<?php echo $row["id"] ?>">修改</a> | <a href="delemployee.php?Uid=<?php echo $row["id"] ?>">删除</a></td>
	    </tr>
		<?php
	    }
		$conn->close();
		?>
		
	  </tbody>
	</table>
</body>
</html>


