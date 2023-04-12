<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>	
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./js/bootstrap.min.js">
</head>
<body style="background-image: url(./img/back0.jpg); background-size: 100% 900px;">
	<form action="loginOK.php" method="post">
	<div class="container" style="margin-top: 60px;">
		<div class="form-group">
	  <label for="exampleInputPassword1">用户名</label>
	  <input type="text" class="form-control" name="username" id="Date" value="" required="required" >
	</div>
	<div class="form-group">
	  <label for="exampleInputPassword1">密码</label>
	  <input type="password" class="form-control" name="password" value="" required="required" >
	</div>
	<button type="submit" class="btn btn-primary">提交</button>
	</div>
	</form>
	
	
	
	
</body>
</html>
<?php
// if($_POST){
// 	var_dump($_POST);
//   $username=$_POST['username'];
//   $password=$_POST['password'];
//   echo $username.$password;
//   require("./conn.php");
//  $conn->query("set names utf8");
//  $sql3="select username,password from users where username=?";
//  $rs=$conn->prepare($sql3);
//  $rs->bind_param('s',$username);
//  $rs->execute();
//  if($rs){
//  	echo "好了";
//  }
//  else{
//  	echo "不好";
//  }
//  var_dump($rs);
//  $rs->bind_result($col1,$col2);
//  $rs->fetch();
//  if($col1==$username&&$col2==$password){
// 	 session_start();
// 	 $_SESSION['user']=$col1;
// 	 //echo $_SESSION['user'];
// 	 //echo session_id();
// 	 //phpinfo();
// 	 header("Location:dataList.php");
//  }
//  else{
// 	 echo "失败";
//  }
// }
  
	  //header('Location: dataList.php');
  
?>
