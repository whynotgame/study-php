<?php
echo "修改处理程序";
var_dump($_POST);
echo "<hr>";
$depid=$_POST['depid'];
$depname=$_POST['depname'];
$depuse=$_POST['depuse'];
$depnum=$_POST['depnum'];

require("../conn.php");
echo "<hr>";
$conn->query("set names utf8");
$sql="update department set depname=?,depuse=?,depnum=? where depid=? ;";
$re=$conn->prepare($sql);
$re->bind_param('ssss',$depname,$depuse,$depnum,$depid);
$res=$re->execute();
//echo $res;
if($res){
	echo "修改成功";
	header('Location: departmentlist.php');
}
else{
	echo "失败";
}
?>