<?php
  //var_dump($_POST);
  $username=$_POST['username'];
  $userdepartment=$_POST['userdepartment'];
  //echo $username.$userdepartment;
  require("../conn.php");
 $conn->query("set names utf8");
 $sql3="select * from employee where empname=?&&emdepartment=?";
 $rs=$conn->prepare($sql3);
 $rs->bind_param('ss',$username,$userdepartment);
 $rs->execute();
// var_dump($rs);
$rs->bind_result($col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9,$col10);
 $rs->fetch();
 //echo "<hr>";
 if($col2==$username&&$col6==$userdepartment){
 	 //echo "成功";
 	 //header('Location: allempinfo.php');
 }
 else{
 	 echo "失败";
 	 //header('Location: search.php');
 }

?>

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
	<table class="table">
	  <thead>
		  <tr scope="col">人员信息</tr>
	    <tr>
	      <th scope="col">人员号</th>
	      <th scope="col">姓名</th>
		  <th scope="col">部门id</th>
	      <th scope="col">职位状态</th>
		  <th scope="col">基本工资</th>
		  <th scope="col">所在部门</th>
		  <th scope="col">操作</th>
	    </tr>
	  </thead>
	  <tbody>
		  
	    <tr>
	      <th scope="row"><?php echo $col1 ?></th>
	      <td><?php echo $col2 ?></td>
	      <td><?php echo $col3 ?></td>
	      <td><?php echo $col4 ?></td>
		  <td><?php echo $col5 ?></td>
		  <td><?php echo $col6 ?></td>
		  <td><a href="updemp.php?Uid=<?php echo $col1; ?>">修改</a> | <a href="delemployee.php?Uid=<?php echo $col1; ?>">删除</a></td>
	    </tr>
	  </tbody>
	</table>
</body>
</html>


