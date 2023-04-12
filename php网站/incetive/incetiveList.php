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
	<h3>员工奖惩信息</h3>
	<h4><a href="addincetive.php">添加奖惩</a></h4>
	<table class="table" style="background-color: #fafafa;border: 1px solid lightgray;">
	  <thead>
	    <tr>
	      <th scope="col">奖惩id</th>
	      <th scope="col">奖惩原因</th>
	      <th scope="col">员工号</th>
	      <th scope="col">部门号</th>
		  <th scope="col">积分</th>
		  <th scope="col">操作</th>
	    </tr>
	  </thead>
	  <tbody>
		  <?php require('getincetivedata.php'); ?>
		  <?php
		    foreach($res as $row){
				
		  ?>
	    <tr>
	      <th scope="row"><?php echo $row['id'] ?></th>
	      <td><?php
		  echo $row['incerea'];
		 //  $Uid=$row['empid'];
			// require('../conn.php');
			// $conn->query("set names utf8");
			// $sql="SELECT empname FROM employee where id=$Uid;";
			// $res=$conn->query($sql);
			// foreach($res as $ro){
			// 	echo $ro['empname'];
			// 	}
				
		   ?></td>
	      <td><?php echo $row['empid'] ?></td>
	      <td><?php echo $row['depid'] ?></td>
		  <td><?php echo $row['price'] ?></td>
		  <td><a href="updince.php?Uid=<?php echo $row["id"] ?>">修改</a> | <a href="delince.php?Uid=<?php echo $row["id"] ?>">删除</a></td>
	    </tr>
		<?php
	    }
		$conn->close();
		?>
		
	  </tbody>
	</table>
</body>
</html>


