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
	<h4 style="color: red;">要先注册一个员工，再给员工账号</h4>
	<div class="container-fluid">
		
	  <form action="addUserOK.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">用户名</label>
		    <input type="text" class="form-control" name="username" >
		    
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">使用日期</label>
		    <input type="text" class="form-control" name="playdate" id="Date" value="" readonly="readonly" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">细节补充</label>
		    <input type="text" class="form-control" name="detail" >
		  </div>
          <div class="form-group">
            <label for="exampleInputPassword1">密码</label>
            <input type="password" class="form-control" name="password" >
          </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">员工id号</label>
		    <input type="text" class="form-control" name="empid" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">是否为员工</label>
		    <input type="text" class="form-control" name="isemp" placeholder="填yes或不填" id="isemp">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">是否为管理员</label>
		    <input type="text" class="form-control" name="isman" placeholder="填yes或不填" id="isman">
		  </div>
		  <button type="submit" class="btn btn-primary" onclick="change()">提交</button>
		</form>
	</div>
</body>

</html>
<script type="text/javascript">

  var now = new Date();
  var currentDate = now.getFullYear()+"-"+(now.getMonth() + 1) + "-" +now.getDate();
  //将获取到的当前日期的值赋值给input输入框
  document.getElementById("Date").value=currentDate;
  
  function change(){
  	var p=document.getElementById('isemp');
  	var isemp=document.getElementById('isemp').value;
  	var isman=document.getElementById('isman').value;
  	console.log(isemp);
	console.log(typeof(isemp));
  	console.log(isman);
  	if((isemp=='yes'||isemp=="")&&(isman=='yes'||isman=="")){
  		
  	}
	else{
		window.alert("输入格式错误");
  		p.focus();
  		event.preventDefault();
	}
  }
</script>
