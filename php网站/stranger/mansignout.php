<?php
              $date=date('Y-m-d');
			  //echo $date;
			  //var_dump($date);
			  $empid=$_SESSION['empid1'];
			  require("../conn.php");
			  $sql="select signout,signin from empsign where signintime=? and empid=?";
			  $rs=$conn->prepare($sql);
			  $rs->bind_param('si',$date,$empid);
			   $rs->execute();
			   $rs->bind_result($col5,$col6);
			   $rs->fetch();
			 
?>