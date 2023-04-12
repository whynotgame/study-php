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
	<p><a href="addUser.php">添加</a></p>
	<table class="table">
	  <thead>
		  <tr scope="col">人员信息</tr>
	    <tr>
	      <th scope="col">id号</th>
	      <th scope="col">任务期限</th>
	      <th scope="col">任务细节</th>
	      <th scope="col">部门id</th>
		  <th scope="col">操作</th>
	    </tr>
	  </thead>
	  <tbody>
		  <?php require('gettaskdata.php'); ?>
		  <?php
		  
		    foreach($res as $row){
		  ?>
	    <tr>
	      <th scope="row"><?php echo $row['id'] ?></th>
	      <td><?php echo $row['deadline'] ?></td>
	      <td><?php echo $row['detail'] ?></td>
	      <td><?php
		  $a=$row['depid'];
		  $sql2="SELECT depname FROM department where depid=$a;";
		  $res2=$conn->query($sql2);
		  foreach($res2 as $row2){
			  echo $row2['depname'];
		  }
		   ?></td>
		  <td><a href="updtask.php?Uid=<?php echo $row["id"] ?>">修改</a> | <a href="deltask.php?Uid=<?php echo $row["id"] ?>">删除</a></td>
	    </tr>
		<?php
	    }
		$conn->close();
		?>
		
	  </tbody>
	</table>
</body>
</html>


