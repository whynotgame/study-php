<?php
		
		$Uid=$_GET['Uid'];
		require("../conn.php");
		$conn->query("set names utf8");
		$sql="update empsign set signin=1 where signinid=? ;";
		$rs=$conn->prepare($sql);
		$rs->bind_param('i',$Uid);
		$re=$conn->prepare($sql);
		$re->bind_param('i',$Uid);
		$res=$re->execute();
		if($res){
			echo "修改成功";
			header('Location: signList.php');
		}
		else{
			echo "失败";
		}
	?>