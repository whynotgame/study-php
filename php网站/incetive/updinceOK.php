<?php
echo "修改处理程序";
var_dump($_POST);
echo "<hr>";
$id=$_POST['id'];
$incerea=$_POST['incerea'];
$empid=$_POST['empid'];
$depid=$_POST['depid'];

require("../conn.php");
echo "<hr>";
$conn->query("set names utf8");
$sql="update incetive set incerea=?,empid=?,depid=? where id=? ;";
$re=$conn->prepare($sql);
$re->bind_param('sssi',$incerea,$empid,$depid,$id);
$res=$re->execute();
//echo $res;
if($res){
	echo "修改成功";
	header('Location: incetiveList.php');
}
else{
	echo "失败";
}
?>