<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../js/bootstrap.min.js">
	<script src="../js/flotr2.min.js"></script>
	<title></title>
	<style>
		::-webkit-scrollbar{
			display: none;
		}
	</style>
</head>
<body>
	<h2>签到图表</h2>
	<div id="chart" style="width: 600px; height: 500px;">
			
	</div>
<?php 
	require('getempdata.php');
	//获取返回数据行数
	//var_dump ($res->num_rows);  //(int)($row['number']);
	$p=0;
	$a=0;
	echo "<br>";
	//var_dump ($res);
	$info = array(
	    array(
		    array()
		)
	);
	$x=array(
	array()
	);
	$a = $res->num_rows;
	//echo $res->num_rows;
	$i=0;
		foreach($res as $row){
				$info[0][$i][0]=$i;
				$info[0][$i++][1]=(int)$row['empsign'];
	    }
		
		foreach($res as $row){
			$x[$p][0]=$p;
			$x[$p++][1]=$row['empname'];
		}
	
	//print_r($info);
	//print_r($x);
	$str=json_encode($info);
	$relx=json_encode($x);
	//print_r($str);
	?>
</body>
<script type="text/javascript" charset="UTF-8">
	console.log(<?php echo $str ?>);
	var x=[[2]];
	var daka=[[[2]]];
	daka=<?php echo $str ?>;
	console.log(typeof daka);
	var i;
	var j=1;
	var www=[[]];
	var www = JSON.parse(JSON.stringify(daka));
	var x=<?php echo $relx; ?>;
	var relx=JSON.parse(JSON.stringify(x));
	console.log(relx);
	// for(i=0;i<<?php echo $a ?>;i++){
	// 		x[i][0]="0";
	// 		x[i][1]="<?php echo $row['empname'] ?>";
	// }
	// for(i=0;i<daka[0].length;i++){

	// 	console.log(daka[0][i][0]);
	// 	console.log(daka[0][i][1]);
	// 	let www = JSON.parse(JSON.stringify(daka))
	// 	//www.push(daka[0][i][1]);
	// }
	console.log(www);
	window.onload=function(){
	      Flotr.draw(
	           document.getElementById('chart'),
	           www,
	           {
		bars:{
		    show:true
		},
		xaxis:{
			min:0,
			tickDecimal:0,
			ticks:relx
			// max:1
		}
	            }
	     );
	};

</script>
</html>
