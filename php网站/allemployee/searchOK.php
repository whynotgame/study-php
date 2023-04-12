<?php
  var_dump($_POST);
  $username=$_POST['username'];
  $userdepartment=$_POST['userdepartment'];
  echo $username.$userdepartment;
  require("../conn.php");
 $conn->query("set names utf8");
 $sql3="select * from employee where empname=?&&emdepartment=?";
 $rs=$conn->prepare($sql3);
 $rs->bind_param('ss',$username,$userdepartment);
 $rs->execute();
 var_dump($rs);
$rs->bind_result($col1,$col2,$col3,$col4,$col5,$col6,$col7);
 $rs->fetch();
 echo "<hr>";
 if($col2==$username&&$col6==$userdepartment){
 	 echo "成功";
 	 header('Location: allempinfo.php');
 }
 else{
 	 echo "失败";
 	 echo $conn->error;
 }


?>