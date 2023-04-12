<?php
//echo "修改处理程序";
$Uid=$_GET['Uid'];
//var_dump($_POST);
// echo "<hr>";
//$empname=$_POST['empname'];
$empstate=$_POST['empstate'];
$basemoney=$_POST['basemoney'];
$emdepartment=$_POST['emdepartment'];
$empsign=$_POST['empsign'];
$empsignout=$_POST['empsignout'];
$image="../img/".$_POST['image'];

require("../conn.php");
echo "<hr>";
$conn->query("set names utf8");
$sql="update employee set empstate=?,basemoney=?,emdepartment=?,empsign=?,empsignout=?,emppicture=? where id=? ;";
$re=$conn->prepare($sql);
$re->bind_param('ssssssi',$empstate,$basemoney,$emdepartment,$empsign,$empsignout,$image,$Uid);
$res=$re->execute();
//echo $res;
if($res){
	echo "修改成功";
	header('Location: search.php');
}
else{
	echo "失败";
}
?>