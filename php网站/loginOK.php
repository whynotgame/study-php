<?php
  //var_dump($_POST);
  $username=$_POST['username'];
  $password=$_POST['password'];
  //echo $username.$password;
  require("./conn.php");
 $conn->query("set names utf8");
 $sql3="select uname,password,empid,isemp,isman from userdata where uname=?";
 $rs=$conn->prepare($sql3);
 $rs->bind_param('s',$username);
 $rs->execute();
 if($rs){
 	//echo "好了";
 }
 else{
 	//echo "不好";
 }
 //var_dump($rs);
 $rs->bind_result($col1,$col2,$col3,$col4,$col5);
 $rs->fetch();
 if($col1==$username&&$col2==$password){
	 
	 session_start();
	 //echo $_SESSION['user'];
	 //echo session_id();
	 //phpinfo();
	 if($col4=="yes"&&($col5)=="yes"){
		 $_SESSION['who']=1;
		 $_SESSION['empid1']=$col3;
		  $_SESSION['man']="";
		  $_SESSION['user']=$col1;
		  $_SESSION['depm']="yes";
		 header("Location:datalist.php");
	 }
	 
	 elseif($col4=='yes'&&($col5)==''){
		 $_SESSION['who']=2;
		 $_SESSION['empid']=$col3;
		  $_SESSION['man']="";
		  $_SESSION['user1']=$col1;
		  $_SESSION['depm']="no";
		 header("Location:./stranger/showemploy.php");
		 
	 }
	 
	 elseif($col4==''&&($col5)=='yes'){
		 $_SESSION['who']=3;
		 $_SESSION['man']="yes";
		 $_SESSION['user2']=$col1;
		 $_SESSION['depm']="no";
	 		 header("Location:onldatalist.php");
	 }
	 
	 
 }
 else{
	 echo '<script>alert("用户名或密码错误!");window.history.back();</script>';
 }
	  //header('Location: dataList.php');
  
?>