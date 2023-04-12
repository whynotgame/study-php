<?php

session_start();
if(($_SESSION['depm'])){
	
	//echo "登录shib";
}
else{
	header("Location:../login.php");
}



?>