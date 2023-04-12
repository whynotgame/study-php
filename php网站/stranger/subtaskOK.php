<?php
$Uid=$_GET['Uid'];
echo $Uid;
require("../conn.php");
$conn->query("set names utf8");
$sql="update task set step=2 where id = $Uid;";
$res=$conn->query($sql);
if($res){
	echo "修改成功";
	header('Location: manshowemploy.php');
}
else{
	echo "失败";
}
?>