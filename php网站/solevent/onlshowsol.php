<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../js/bootstrap.min.js">
	<link rel="stylesheet" href="../bootstrap-icons/font/bootstrap-icons.css">
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.js/dist/umd/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<style>
		::-webkit-scrollbar{
			display: none;
		}
	</style>
</head>
<body>
	<table class="table">
	  <thead>
		  <tr scope="col">您需要管理的任务</tr>
	    <tr>
	      <th scope="col">任务</th>
		  <th scope="col">操作</th>
	    </tr>
	  </thead>
	  <tbody>
		  
		  <?php //require('getsoldata.php');
		  require('getmansol.php');
		   ?>
		  
		  
			<?php foreach($res1 as $row){?>
			  		<tr>
			    <th scope="row"><?php echo $row['reviewed'] ?></th>
			    <td><a href="passmanevent.php?Uid=<?php echo $row["eventid"] ?>">通过</a> | <a href="noevent.php?Uid=<?php echo $row["eventid"] ?>">不通过</a></td>
			  </tr>
			   <?php }?>
		
		
	  </tbody>
	</table>
</body>
</html>
