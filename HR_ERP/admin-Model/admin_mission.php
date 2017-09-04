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
$timezone="Asia/Taipei";
date_default_timezone_set($timezone);
try {
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    $sql = "SELECT e_sn,e_name_cn FROM `employees`";
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
  <style>
    th{
      background-color:#FFDEAD;
    }
    td,tr,th{
      border-left: solid 1px white;
      border-right: solid 1px white;
    }
    tr:hover{
      background-color:#FFEFD5;
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
					<div class="left-title">
						<p style="margin:auto 20px">人事管理</p>
					</div>
					<div class="left-list" >
						<a href="admin_employee.php" style="margin:auto 35px">員工資料列表</a>
					</div>
						<div class="left-list">
							<a href="admin_editEmployee.php" style="margin:auto 35px">編輯員工資料</a>
						</div>
						<div class="left-list">
							<a href="admin_addEmployee.php" style="margin:auto 35px">新增員工資料</a>
						</div>
				</div>
<!-- 第一組選單結束  -->
<!-- 第二組選單開始  -->
				<div style="margin-bottom:5px">
					<div class="left-title"  style="background-color:#FFDDAA">
						<p style="margin:auto 20px">差勤管理</p>
					</div>
					<div class="left-list">
						<a href="admin_bTrip.php" style="margin:auto 35px">差勤審核</a>
					</div>
					<div class="left-list">
						<p style="margin:auto 35px;color:#FFAA33;font-weight:500">差勤明細</p>
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
		<div class="right">
			<div class="right-top">
				<p class="right-top-title">差勤明細</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
<?php
  $tt=time();
  $now_m=date("n",$tt);//現在月份
?>
			<div class="right-bottom">
        <div style="width:100%;height:50px;margin:auto;;border-bottom:solid 1px #CCC;">
            <p>目前顯示<?php echo $now_m; ?>月份資料</p>
  			</div>
<!--  右下欄上方選擇列 結束   -->
				<div style="margin-left:10px">
					<table cellspacing="0">
						<th colspan="2">姓名</th>
						<th>病假</th>
						<th>事假</th>
						<th>婚/產假</th>
						<th>公假</th>
						<th>喪假</th>
						<th>已使用補休</th>
						<th>特休</th>
            <th>出差</th>
            <th>加班費</th>
            <th>可使用補休</th>
            <th>加班時數</th>
					<?php
						while($row = mysqli_fetch_array($result)) {
							$sn=$row["e_sn"];

              $sql = "SELECT SUM(`l_compensatoryLevae`),SUM(`l_annualLeave`),SUM(`l_marriageLeave`),SUM(`l_personalLeave`),SUM(`l_funeralLeave`),SUM(`l_officialLeave`),SUM(`l_sickLeave`) FROM `leave` WHERE l_sn='$sn'AND l_month='$now_m'";
              $result4 = mysqli_query($conn,$sql);
              $row4=mysqli_fetch_array($result4);

              $sql = "SELECT SUM(`l_compensatoryLevae`),SUM(`l_annualLeave`),SUM(`l_marriageLeave`),SUM(`l_personalLeave`),SUM(`l_funeralLeave`),SUM(`l_officialLeave`),SUM(`l_sickLeave`) FROM `leave` WHERE l_sn='$sn'";
              $result1= mysqli_query($conn,$sql);
              $row1 = mysqli_fetch_array($result1);

  						$sql = "SELECT SUM(`b_totalTime`) FROM `business` WHERE b_sn='$sn'";
  						$result2= mysqli_query($conn,$sql);
  						$row2 = mysqli_fetch_array($result2);

              $sql = "SELECT SUM(`o_hrs`), SUM(`o_phrs`)FROM `overtime_apply` WHERE o_sn='$sn'";
              $result3= mysqli_query($conn,$sql);
              $row3 = mysqli_fetch_array($result3);

              $sql = "SELECT SUM(`b_totalTime`) FROM `business` WHERE b_sn='$sn'AND b_month='$now_m'";
              $result5= mysqli_query($conn,$sql);
              $row5 = mysqli_fetch_array($result5);

              $sql = "SELECT SUM(`o_hrs`), SUM(`o_phrs`)FROM `overtime_apply` WHERE o_sn='$sn'AND o_month='$now_m'";
              $result6= mysqli_query($conn,$sql);
              $row6 = mysqli_fetch_array($result6);
					?>
					<tr><tr>
					<td rowspan="2" style="width:70px"><?php echo $row["e_name_cn"];?></td>
					<td style="width:50px">月</td>
					<td style="width:70px"><?php 	echo $row4["SUM(`l_sickLeave`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row4["SUM(`l_personalLeave`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row4["SUM(`l_marriageLeave`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row4["SUM(`l_officialLeave`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row4["SUM(`l_funeralLeave`)"]; ?></td>
					<td style="width:90px"><?php 	echo $row4["SUM(`l_compensatoryLevae`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row4["SUM(`l_annualLeave`)"]; ?></td>
          <td style="width:70px"><?php 	echo $row5["SUM(`b_totalTime`)"]; ?></td>
          <td style="width:70px"><?php 	echo $row6["SUM(`o_hrs`)"]; ?></td>
          <td style="width:90px"><?php 	echo $row6["SUM(`o_phrs`)"]; ?></td>
          <td style="width:90px"><?php 	echo ($row6["SUM(`o_phrs`)"]+$row6["SUM(`o_hrs`)"]); ?></td>
          </tr>

					<td style="width:50px">總</td>
					<td style="width:70px"><?php 	echo $row1["SUM(`l_sickLeave`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row1["SUM(`l_personalLeave`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row1["SUM(`l_marriageLeave`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row1["SUM(`l_officialLeave`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row1["SUM(`l_funeralLeave`)"]; ?></td>
					<td style="width:90px"><?php 	echo $row1["SUM(`l_compensatoryLevae`)"]; ?></td>
					<td style="width:70px"><?php 	echo $row1["SUM(`l_annualLeave`)"]; ?></td>
          <td style="width:70px"><?php 	echo $row2["SUM(`b_totalTime`)"]; ?></td>
          <td style="width:70px"><?php 	echo $row3["SUM(`o_hrs`)"]; ?></td>
          <td style="width:90px"><?php 	echo $row3["SUM(`o_phrs`)"]; ?></td>
          <td style="width:90px"><?php 	echo  ($row3["SUM(`o_phrs`)"]+$row3["SUM(`o_hrs`)"]); ?></td>
        </tr>
					<?php } ?>
					</table>
				</div><!-- 表格結束  -->
			</div><!--  右下欄 RIGHT-BOTTOM 結束    -->
    </div><!--   右欄 RIGHT 結束    -->
  </div><!--    下欄 DOWN 結束    -->
</body>
</html>
