<?php
include_once('connect.php');//連接數據庫

$action = $_GET['action'];
if($action=='add'){
	$events = stripslashes(trim($_POST['event']));//事件内容

	$isallday = $_POST['isallday'];//是否全天事件
	$isend = $_POST['isend'];//是否有結束時間

	$startdate = trim($_POST['startdate']);//開始時間
	$enddate = trim($_POST['enddate']);//結束時間

	$s_time = $_POST['s_hour'].':'.$_POST['s_minute'].':00';//開始時間
	$e_time = $_POST['e_hour'].':'.$_POST['e_minute'].':00';//結束時間

	if($isallday==1 && $isend==1){
		$starttime = strtotime($startdate);
		$endtime = strtotime($enddate);
	}elseif($isallday==1 && $isend==""){
		$starttime = strtotime($startdate);
	}elseif($isallday=="" && $isend==1){
		$starttime = strtotime($startdate.' '.$s_time);
		$endtime = strtotime($enddate.' '.$e_time);
	}else{
		$starttime = strtotime($startdate.' '.$s_time);
	}

	$color=$_POST['color'];

	$isallday = $isallday?1:0;
	$sql="INSERT INTO `calendar` (`title`,`starttime`,`endtime`,`allday`,`color`) values ('$events','$starttime','$endtime','$isallday','$color')";
	$query = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)==1){
		echo '1';
	}else{
		echo '出錯了！';	
	}
	
}elseif($action=="edit"){
	$id = intval($_POST['id']);
	if($id==0){
		echo '事件不存在!';
		exit;	
	}
	$events = stripslashes(trim($_POST['event']));//事件內容
	

	$isallday = $_POST['isallday'];//是否全天事件
	$isend = $_POST['isend'];//是否有結束時間

	$startdate = trim($_POST['startdate']);//開始時間
	$enddate = trim($_POST['enddate']);//結束時間

	$s_time = $_POST['s_hour'].':'.$_POST['s_minute'].':00';//開始時間
	$e_time = $_POST['e_hour'].':'.$_POST['e_minute'].':00';//結束時間

	if($isallday==1 && $isend==1){
		$starttime = strtotime($startdate);
		$endtime = strtotime($enddate);
	}elseif($isallday==1 && $isend==""){
		$starttime = strtotime($startdate);
		$endtime = 0;
	}elseif($isallday=="" && $isend==1){
		$starttime = strtotime($startdate.' '.$s_time);
		$endtime = strtotime($enddate.' '.$e_time);
	}else{
		$starttime = strtotime($startdate.' '.$s_time);
		$endtime = 0;
	}

	$isallday = $isallday?1:0;
	$sql="UPDATE `calendar` set `title`='$events',`starttime`='$starttime',`endtime`='$endtime',`allday`='$isallday' where `id`='$id'";
	mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)==1){
		echo '1';
	}else{
		echo '出錯了！';	
	}
}elseif($action=="del"){
	$id = intval($_POST['id']);
	if($id>0){
		$sql="DELETE from `calendar` where `id`='$id'";
		mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)==1){
			echo '1';
		}else{
			echo '出錯了！';	
		}
	}else{
		echo '事件不存在！';
	}
}elseif($action=="drag"){
	$id = $_POST['id'];
	$daydiff = (int)$_POST['daydiff']*24*60*60;
	$minudiff = (int)$_POST['minudiff']*60;
	$allday = $_POST['allday'];
	$sql="SELECT * from `calendar` where id='$id'";
	$query  = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
	
	if($allday=="true"){
		if($row['endtime']==0){
			$sql = "UPDATE `calendar` set starttime=starttime+'$daydiff' where id='$id'";
		}else{
			$sql = "UPDATE `calendar` set starttime=starttime+'$daydiff',endtime=endtime+'$daydiff' where id='$id'";
		}
		
	}else{
		$difftime = $daydiff + $minudiff;
		if($row['endtime']==0){
			$sql = "UPDATE `calendar` set starttime=starttime+'$difftime' where id='$id'";
		}else{
			$sql = "UPDATE `calendar` set starttime=starttime+'$difftime',endtime=endtime+'$difftime' where id='$id'";
		}
	}
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)==1){
		echo '1';
	}else{
		echo '出錯了！';	
	}
}elseif($action=="resize"){
	$id = $_POST['id'];
	$daydiff = (int)$_POST['daydiff']*24*60*60;
	$minudiff = (int)$_POST['minudiff']*60;
	
	$sql="SELECT * from `calendar` where id='$id'";
	
	$result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	//echo $allday;exit;
	$difftime = $daydiff + $minudiff;
	if($row['endtime']==0){
		$sql = "UPDATE `calendar` set endtime=starttime+'$difftime' where id='$id'";
	}else{
		$sql = "UPDATE `calendar` set endtime=endtime+'$difftime' where id='$id'";
	}
	
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)==1){
		echo '1';
	}else{
		echo '出錯了！';	
	}
}else{
	
}
?>