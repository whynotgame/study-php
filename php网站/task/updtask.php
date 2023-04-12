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
	<h2>修改一个任务</h2>
	<h4 style="color: red;">请注重你修改的任务,你的任务会让一个部门的人去执行</h4>
	<?php require('getdepartmentdata.php');
	 require('getupdtask.php');?>
	<div class="container-fluid">
	  <form action="updtaskOK.php?Uid=<?php echo $_GET['Uid'] ?>" method="post">
		  <div class="input-group mb-3">
		    <div class="input-group-prepend">
		      <label class="input-group-text" for="inputGroupSelect01">部门选择</label>
		    </div>
		    <select class="custom-select" id="inputGroupSelect01" name="depname" value="">
				<?php
				  foreach($res as $row){
				
				?>
		      <option><?php echo $row['depname'] ?></option>
			  <?php
			  }
			  //$conn->close();
			  foreach($res1 as $row1){
			  ?>
		    </select>
		  </div>
		  
		  <div class="input-group">
		    <div class="input-group-prepend">
		      <span class="input-group-text">任务细节</span>
		    </div>
		    <textarea class="form-control" aria-label="With textarea" name="detail" value=""><?php echo $row1['detail'] ?></textarea>
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">最终期限</label>
		    <input type="date" class="form-control" name="playdate" id="Date" value="<?php echo $row1['deadline'] ?>">
		  </div>
		  <?php
		  //$conn->close();
		  }
		 ?>
		  <button type="submit" class="btn btn-primary">提交</button>
		</form>
	</div>
</body>

</html>
<script type="text/javascript">
</script>
