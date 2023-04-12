<?php
var_dump($_POST);
echo "<hr>";
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$newpass=$_POST['newpass'];

require("../conn.php");
echo "<hr>";
$sql="select id,uname,password from userdata where uname=? and password=?";
$rs=$conn->prepare($sql);
$rs->bind_param('ss',$uname,$pass);
$rs->execute();
$rs->bind_result($col1,$col2,$col3);
$rs->fetch();
if($col2==$uname&&$col3==$pass){
	//echo "找到了部门id号";
	require("../conn.php");
	$conn->query("set names utf8");
	$sql1="update userdata set password=? where id=? ;";
	$re=$conn->prepare($sql1);
	$re->bind_param('si',$newpass,$col1);
	$res=$re->execute();
	if($res){
		echo "修改成功";
	}
    header("Location: ../login.php");
}
else{
	echo '<script>alert("无相关用户！！！");window.history.back();</script>';
	//echo "修改失败".$conn->error;
}

// $conn->query("set names utf8");
// $sql="update empsign set signintime=?,signouttime=?,signin=?,signout=? where signinid=? ;";
// $re=$conn->prepare($sql);
// $re->bind_param('ssiii',$signintime,$signouttime,$signin,$signout,$signinid);
// $res=$re->execute();
// if($res){
// 	echo "修改成功";
// 	header('Location: signList.php');
// }
// else{
// 	echo "失败";
// }
?>