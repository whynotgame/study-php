<?php
//session_start();
require("../conn.php");
$empid=$_SESSION['empid1'];
$conn->query("set names utf8");
$sql="select empsign,empsignout from employee where id=?";
$rs=$conn->prepare($sql);
$rs->bind_param('i',$empid);
 $rs->execute();
 $rs->bind_result($col1,$col2);
 $rs->fetch();
?>