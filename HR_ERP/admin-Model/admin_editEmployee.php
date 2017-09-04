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

$e_name_cn=$_POST["e_name_cn"];

try {
      $conn = mysqli_connect($servername,$username ,$password,$dbname);
      if($e_name_cn==NULL)
      {
        $sql = "SELECT * FROM employees";
		    $result = mysqli_query($conn,$sql);
      }
      else{
        $sql = "SELECT * FROM `employees` WHERE e_name_cn='$e_name_cn'";
        $result = mysqli_query($conn,$sql);
        }
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
    span{
      font-family:Microsoft JhengHei;
      font-size: 20px;
    }
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
    input{
       font-size:18px;
       font-family:Microsoft JhengHei;
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
							<p style="margin:auto 35px;color:#FFAA33;font-weight:500">員工資料修改</p>
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
				<p class="right-top-title">編輯員工資料</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
			<div class="right-bottom">
				<div style="width:100%;height:70px;margin:auto;border-bottom:solid 1px #CCC;">
					<form method="post" action="admin_editEmployee.php" style="float:left;margin:15px">
  					<span>請輸入欲編輯的員工姓名：<input type="text" name="e_name_cn" size="15"></span>
  					<input class="btn" type="submit" value="搜尋" />
					</form>
				</div>
<!--  右下欄上方選擇列 結束   -->
				<div>
					<table cellspacing="0" style="margin-left:15px">
            <th>刪除</th>
            <th>編輯</th>
						<th>編號</th>
						<th>員工型態</th>
						<th>員工狀態</th>
						<th>工作地點</th>
						<th>中文姓名</th>
						<th>英文姓名</th>
						<th>分機號碼</th>
						<th>電話</th>
						<?php
						while($row = mysqli_fetch_array($result)) {
						?>
						<tr>
            <td style="width:70px"><a href="../Controller/delete_user.php?e_sn=<?php echo $row["e_sn"]; ?>"><i class="material-icons" style="font-size:20px;color:#666666;margin-top:4px">delete</i></a></td>
            <td style="width:70px"><a href="admin_updateEmployee.php?e_sn=<?php echo $row["e_sn"]; ?>"><i class="material-icons" style="font-size:20px;color:#666666;margin-top:4px">border_color</i></a></td>
						<td style="width:100px"><?php echo $row["e_sn"]; ?></td>
						<td style="width:100px"><?php echo $row["e_type"]; ?></td>
						<td style="width:100px"><?php echo $row["e_status"];?></td>
						<td style="width:100px"><?php echo $row["e_location"];?></td>
						<td style="width:100px"><?php echo $row["e_name_cn"];?></td>
						<td style="width:100px"><?php echo $row["e_name_en"];?></td>
						<td style="width:100px"><?php echo $row["e_extension"]?></td>
						<td style="width:150px"><?php echo $row["e_mobile"];?></td>
						</tr>
					<?php } ?>
					</table>
				</div><!--  表格結束  -->
			</div><!--  右下欄 RIGHT-BOTTOM 結束    -->
		</div><!--   右欄 RIGHT 結束    -->
	</div><!--    下欄 DOWN 結束    -->
</body>
</html>
