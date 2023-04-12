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
	
	<h3>账号信息</h3>
	<h4><a href="addUser.php">添加账号</a></h4>
	<table class="table" style="background-color: #fafafa;border: 1px solid lightgray;">
	  <thead>
	    <tr>
	      <th scope="col">id号</th>
	      <th scope="col">用户名</th>
	      <th scope="col">使用时间</th>
	      <th scope="col">细节</th>
		  <th scope="col">密码</th>
		  <th scope="col">操作</th>
	    </tr>
	  </thead>
	  <tbody>
		  <?php require('getuserdata.php'); ?>
		  <?php
		    foreach($res as $row){
				
		  ?>
	    <tr>
	      <th scope="row"><?php echo $row['id'] ?></th>
	      <td><?php echo $row['uname'] ?></td>
	      <td><?php echo $row['playdate'] ?></td>
	      <td><?php echo $row['details'] ?></td>
		  <td><?php echo $row['password'] ?></td>
		  <td><a href="updUser.php?Uid=<?php echo $row["id"] ?>">修改</a> | <a href="delUser.php?Uid=<?php echo $row["id"] ?>">删除</a></td>
	    </tr>
		<?php
	    }
		$conn->close();
		?>
		
	  </tbody>
	</table>
</body>
</html>


