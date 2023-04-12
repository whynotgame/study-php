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
	<h3>签到信息</h3>
	<table class="table" style="background-color: #fafafa;border: 1px solid lightgray;">
	  <thead>
	    <tr>
	      <th scope="col">签到号</th>
	      <th scope="col">姓名</th>
	      <th scope="col">签出时间</th>
		  <th scope="col">签到</th>
		  <th scope="col">签出</th>
		  <th scope="col">操作</th>
	    </tr>
	  </thead>
	  <tbody>
		  <?php require('getsigndata.php'); ?>
		  <?php
		    foreach($res as $row){
				
		  ?>
	    <tr>
	      <th scope="row"><?php echo $row['signinid'] ?></th>
	      <td><?php
		  //echo $row['empid'];
		  $Uid=$row['empid'];
			require('../conn.php');
			$conn->query("set names utf8");
			$sql="SELECT empname FROM employee where id=$Uid;";
			$res=$conn->query($sql);
			foreach($res as $ro){
				echo $ro['empname'];
				}
				
		   ?></td>
	      <td><?php echo $row['signintime'] ?></td>
	      <td><?php echo $row['signin'] ?></td>
		  <td><?php echo $row['signout'] ?></td>
		  <td><a href="updsign.php?Uid=<?php echo $row["signinid"] ?>">修改</a> | <a href="relsign.php?Uid=<?php echo $row["signinid"] ?>">签到</a> | <a href="relsignout.php?Uid=<?php echo $row["signinid"] ?>">签出</a></td>
	    </tr>
		<?php
	    }
		$conn->close();
		?>
		
	  </tbody>
	</table>
</body>
</html>


