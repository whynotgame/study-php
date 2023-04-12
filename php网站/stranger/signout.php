<?php
              $date=date('Y-m-d');
			  //echo $date;
			  $empid=$_SESSION['empid'];
			  //var_dump($date);
			  require("../conn.php");
			  $sql="select signout,signin from empsign where signintime=? and empid=?";
			  $rs=$conn->prepare($sql);
			  $rs->bind_param('si',$date,$empid);
			   $rs->execute();
			   $rs->bind_result($col4,$col5);
			   $rs->fetch();
			 
?>