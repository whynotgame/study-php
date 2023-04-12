<?php
session_start();
$a = $_SESSION['empid1'];
require("../conn.php");
$sql="select depid from employee where id=?";
$rs=$conn->prepare($sql);
$rs->bind_param('s',$a);
$rs->execute();
$rs->bind_result($col3);
$rs->fetch();
$depid=$col3;
//echo $depid;
?>