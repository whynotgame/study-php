<?php
$reviewed=0;
$pending=0;
$completed=0;

require("../conn.php");
$conn->query("set names utf8");
$sql="SELECT * FROM event;";
$res=$conn->query($sql);
foreach($res as $row){
	if($row['reviewed']!=''){
		$reviewed++;
	}
	if($row['pending']!=''){
		$pending++;
	}
	if($row['completed']!=''){
		$completed++;
	}
}




?>