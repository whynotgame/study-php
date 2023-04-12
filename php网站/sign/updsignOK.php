<?php
echo "修改处理程序";
var_dump($_POST);
echo "<hr>";
$signinid=$_POST['signinid'];
$signintime=$_POST['signintime'];
$signin=$_POST['signin'];
$signout=$_POST['signout'];

require("../conn.php");
echo "<hr>";
$conn->query("set names utf8");
$sql="update empsign set signintime=?,signin=?,signout=? where signinid=? ;";
$re=$conn->prepare($sql);
$re->bind_param('siii',$signintime,$signin,$signout,$signinid);
$res=$re->execute();
if($res){
	echo "修改成功";
	header('Location: signList.php');
}
else{
	echo "失败";
}
?>