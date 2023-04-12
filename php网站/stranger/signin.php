<?php
//session_start();
              $date=date('Y-m-d');
			  $empid=$_SESSION['empid'];
			  //echo $date;
			  //var_dump($date);
			  require("../conn.php");
			  $sql="select signin from empsign where signintime=? and empid=?";
			  $rs=$conn->prepare($sql);
			  $rs->bind_param('si',$date,$empid);
			   $rs->execute();
			   $rs->bind_result($col3);
			   $rs->fetch();
			  
?>