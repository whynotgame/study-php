<?php

session_start();
if(!empty($_SESSION['depm'])){
	
	if($_SESSION['who']==1||$_SESSION['who']==3){
		//header("Location:datalist.php");
	}
		
	else{
		echo '<script>alert("你不是管理员!!");window.history.back();</script>';
	}
	
}

else{
	header("Location:./login.php");
}



?>