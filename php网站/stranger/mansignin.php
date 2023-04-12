<?php
//session_start();
              $manid=$_SESSION['empid1'];
              $date=date('Y-m-d');
			  //echo $date;
			  //var_dump($date);
			  require("../conn.php");
			  $sql="select signin,empid from empsign where signintime=? and empid=?";
			  $rs=$conn->prepare($sql);
			  $rs->bind_param('si',$date,$manid);
			   $rs->execute();
			   $rs->bind_result($col3,$col4);
			   $rs->fetch();
			  
?>