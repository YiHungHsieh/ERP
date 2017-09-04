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
<html>
<head>
	<title>人資管理</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
					<div class="left-list">
						<a href="admin_employee.php" style="margin:auto 35px">員工資料列表</a>
					</div>
						<div class="left-list">
							<a href="admin_editEmployee.php" style="margin:auto 35px">員工資料修改</a>
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
		<div class="right">
			<div class="right-top">

			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
			<div class="right-bottom">
			</div><!--  右下欄 RIGHT-BOTTOM 結束    -->
		</div><!--   右欄 RIGHT 結束    -->
	</div><!--    下欄 DOWN 結束    -->
</body>
</html>
