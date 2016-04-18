<?php
	//主要实现用户访问网页可现实当前数据库中的温度值
	
	$con = mysqli_connect('localhost','root','');
	if($con)
	{
		//echo "数据库连接成功";
	}
	else{
		echo "数据库连接失败";
	}
	if(mysqli_select_db($con,'tempdata'))
	{
		//echo "数据库选择成功";
	}else{
		echo "数据库选择失败";
	}
	
	/*
	date_default_timezone_set("Asia/Shanghai");
	$d=strtotime("now");
	
	$time=date("Y-m-d H:i:sa",$d);
	$sql_str="Insert temperature(time,temperature) values('$time','111.11')";
	
	if(mysqli_query($con,$sql_str))
	{
		echo "插入成功";
	}else{
		echo "插入失败";
	}*/
	
	$res = mysqli_query($con,'select * from temperature');
	var_dump($res);
	/*$row=mysqli_fetch_array($res);
	var_dump($row);
	$row=mysqli_fetch_array($res);
	var_dump($row);*/
	
	mysqli_close($con);
?>