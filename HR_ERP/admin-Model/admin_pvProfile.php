<?php session_start();
  if ($_SESSION['id']== NULL )
  {
    header('Location:log_login.php');
  }
	elseif ($_SESSION['id']!= NULL && $_SESSION['root']!='admin')
	{
		header('Location: ../user-Model/user_index.php');
	} ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);
    $sql = "SELECT * FROM `employees` WHERE e_sn = '".$_SESSION['temp']."'";
    // use exec() because no results are returned
    $result = mysqli_query($conn,$sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
<html>
<head>
	<title>人資管理</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
 		table{
   		width:95% ;
   		margin:auto;
   		margin-top:0px;
		}
		th{
		padding:0;
		margin:0;
		background-color:#F4A460;
		text-align:center;
		font-size:20px;
		line-height:40px ;
		width:15%;
		}
		td{
			text-align: left;
			padding:0;
			width:15%;
		}
		tr{
			height:38px;
		}
</style>
</head>
<body>
  <div class="top">
  <img class="titleImg" src="https://cdn.unwire.hk/wp-content/uploads/2014/10/facebook-user.jpg" width="70" height="50">
		<a href="../user-Model/user_index.php">
			<i id="topIcon" class="material-icons" >exit_to_app</i>
		</a>
		<a href="#">
			<i id="topIcon" class="material-icons">notifications</i>
		</a>
	</div>
<!--    上欄 TOP 結束        -->
	<div class="down">
<!--     左欄 LEFT 開始     -->
		<div class="left">
			<div class="left-top">
				<p class="left-top-title">人資管理</p>
			</div>
<!--    左上欄 LEFT-TOP 結束    -->
			<div class="left-bottom">
<!-- 第一組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title" style="background-color:#FFDDAA">
						<p style="margin:auto 20px">人事管理</p>
					</div>
					<div class="left-list" >
						<a href="admin_employee.php" style="margin:auto 35px">員工資料列表</a>
					</div>
						<div class="left-list">
							<p style="margin:auto 35px;color:#FFAA33;font-weight:500">編輯員工資料</p>
						</div>
						<div class="left-list">
							<a href="admin_addEmployee.php" style="margin:auto 35px">新增員工資料</a>
						</div>
				</div>
<!-- 第一組選單結束  -->
<!-- 第二組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title">
						<p style="margin:auto 20px">差勤管理</p>
					</div>
					<div class="left-list">
						<a href="admin_bTrip.php" style="margin:auto 35px">差勤審核</a>
					</div>
					<div class="left-list">
						<a href="admin_mission.php" style="margin:auto 35px">差勤明細</a>
					</div>
				</div>
<!-- 第二組選單結束  -->
<!-- 第三組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title">
						<p style="margin:auto 20px">公告欄</p>
					</div>
					<div class="left-list">
						<a href="admin_addNews.php" style="margin:auto 35px">新增公告</a>
					</div>
					<div class="left-list">
						<a href="admin_editNews.php" style="margin:auto 35px">編輯公告</a>
					</div>
				</div>
<!-- 第三組選單結束  -->
<!-- 第四組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title">
						<p style="margin:auto 20px">行事曆</p>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 35px">新增日程</a>
					</div>
					<div class="left-list">
						<a href="#" style="margin:auto 35px">修改日程</a>
					</div>
				</div>
<!-- 第四組選單結束  -->
			</div><!-- 左下欄 LEFT-BOTTOM 結束   -->
		</div><!--左 LEFT 結束 -->
		<div class="right" style="height:auto">
			<div class="right-top">
				<p class="right-top-title">編輯員工資料</p>
			</div>
			<div style="border-left:solid 1px #CCC;margin-top:0px;padding-top:30px">
				<table>
					<?php
						while($row = mysqli_fetch_array($result)) {
					?>
					<tr>
						<th colspan="6">員工基本資料</th>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>人員編號：<?php echo $row["e_sn"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>到職日期：<?php echo $row["e_date"];?></td>
	<!-- 人員大頭貼  --><td colspan="2" rowspan="4"></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>中文姓名：<?php echo $row["e_name_cn"];?></td>
						<td><i class="fa fa-star" style="font-size:17px;color:red"></i>性別：<?php echo $row["e_sex"];?></td>
						<td ><i class="fa fa-star" style="font-size:17px;color:red"></i>手機：<?php echo $row["e_mobile"];?></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>英文姓名：<?php echo $row["e_name_en"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>ID：<?php echo $row["e_personalID"];?></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>婚姻：<?php echo $row["e_marriage"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>血型：<?php echo $row["e_blood"];?></td>
					</tr>
					<tr>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>通訊地址：<?php echo $row["e_address"];?></td>
						<td colspan="3"><i class="fa fa-star" style="font-size:17px;color:red"></i>郵件信箱：<?php echo $row["e_email"];?></td>
					</tr>
					<tr>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>生日：<?php echo $row["e_birth"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>緊急聯絡人：<?php echo $row["e_emergency"];?></td>
						<td colspan="2"><i class="fa fa-star" style="font-size:17px;color:red"></i>緊急聯絡人手機：<?php echo $row["e_em_mobile"];?></td>
					</tr>
					<tr>
						<th colspan="6" style=" ;"><i class="fa fa-star" style="font-size:17px;color:red"></i>學歷</th>
					</tr>
						<tr>
						<th style="font-size:15px;background-color:#F5F5F5; ">最高學歷</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">學校</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">科系</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">期間</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">畢/肄/在學</th>
					</tr>
<!-- 學歷表格  -->	<tr>
						<td ><?php echo $row["e_edu"];?></td>
						<td ><?php echo $row["e_edu_high"];?></td>
						<td ><?php echo $row["e_edu_dep"];?></td>
						<td ><?php echo $row["e_edu_start"]?></td >
						<td ><?php echo $row["e_edu_end"]?></td >
						<td ><?php echo $row["e_edu_gra"];?></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>經歷</th>
					</tr>
					<tr>
						<th style="font-size:15px;background-color:#F5F5F5; ">公司名稱</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">職稱</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">期間</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">離職原因</th>
					</tr>
<!-- 經歷表格1  -->	<tr>

						<td ><?php echo $row["e_exp_com1"];?></td>
						<td ><?php echo $row["e_exp_posi1"];?></td>
						<td ><?php echo $row["e_exp_start1"];?></td>
						<td ><?php echo $row["e_exp_end1"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason1"];?></td>
					</tr>
					<tr>
<!-- 經歷表格2  -->
            <td ><?php echo $row["e_exp_com2"];?></td>
						<td ><?php echo $row["e_exp_posi2"];?></td>
						<td ><?php echo $row["e_exp_start2"];?></td>
						<td ><?php echo $row["e_exp_end2"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason2"];?></td>
					</tr>
					<tr>
<!-- 經歷表格3  -->		<td ><?php echo $row["e_exp_com3"];?></td>
						<td ><?php echo $row["e_exp_posi3"];?></td>
						<td ><?php echo $row["e_exp_start3"];?></td>
						<td ><?php echo $row["e_exp_end3"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason3"];?></td>
					</tr>
					<tr>
<!-- 經歷表格4  -->		<td ><?php echo $row["e_exp_com4"];?></td>
						<td ><?php echo $row["e_exp_posi4"];?></td>
						<td ><?php echo $row["e_exp_start4"];?></td>
						<td ><?php echo $row["e_exp_end4"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason4"];?></td>
					</tr>
					<tr>
<!-- 經歷表格5  -->		<td ><?php echo $row["e_exp_com5"];?></td>
						<td ><?php echo $row["e_exp_posi5"];?></td>
						<td ><?php echo $row["e_exp_start5"];?></td>
						<td ><?php echo $row["e_exp_end5"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason5"];?></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>技能專長</th>
					</tr>
					<tr>
						<td colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>認證資格:<?php echo $row["e_license"];?></td>
					</tr>
					<tr>
						<th colspan="6"><i class="fa fa-star" style="font-size:17px;color:red"></i>在職資料</th>
					</tr>
					<tr>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">員工狀態</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">員工型態</th>
						<th style="font-size:15px;background-color:#F5F5F5; ">工作地點</th>
						<th colspan="2" style="font-size:15px;background-color:#F5F5F5; ">分機號碼</th>
					</tr>
					<tr>
						<td colspan="2"><?php echo $row["e_status"];?></td>
						<td><?php echo $row["e_type"];?></td>
						<td ><?php echo $row["e_location"];?></td>
						<td colspan="2"><?php echo $row["e_extension"];?></td>
					</tr>
					<?php } ?>
				</table>
				<a href="admin_index.php"><button style="margin:20px" class="btn" >確認新增</button></a>
			</div>
		</div>
	</div>
</body>
</html>
