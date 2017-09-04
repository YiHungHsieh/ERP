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
  <style>
		input,textarea{
			 font-size:18px;
			 font-family:Microsoft JhengHei;
			 background-color:	#DCDCDC;
			 border:solid 2px white;

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
					<div class="left-title" style="background-color:#FFDDAA">
						<p style="margin:auto 20px">公告欄</p>
					</div>
					<div class="left-list">
						<a href="admin_addNews.php" style="margin:auto 35px">新增公告</a>
					</div>
					<div class="left-list">
						<p style="margin:auto 35px;color:#FFAA33;font-weight:500">編輯公告</p>
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
				<p class="right-top-title">編輯公告</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
			<div class="right-bottom">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "peopleresource";
            try {
                $conn = mysqli_connect($servername,$username ,$password,$dbname);
                if(count($_POST)>0) {
                $sql = "UPDATE `news` SET title='".$_POST['title']."',container='".$_POST['container']."' WHERE id='".$_POST['id']."'";
                header("Location:admin_editNews.php");
                mysqli_query($conn,$sql);
                }
                $sql = "SELECT * FROM news WHERE id='".$_GET['id']."'";
                // use exec() because no results are returned
                $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
            }
            catch(PDOException $e)
                {
                echo $sql . "<br>" . $e->getMessage();
                }
            ?>
            <form action="" method="post"  style="margin-left:50px;margin-top:50px">
              <p>標題:<br><textarea cols="80" rows="1" style="margin-top:10px" name="title"><?php echo $row['title'];?></textarea></p>
              <p>內容:<br><textarea cols="80" rows="10" style="margin-top:10px" name="container"><?php echo $row['container'];?></textarea></p>
              <input type="submit" class="btn" value="確定修改">
              <input type="hidden"  name="id" value="<?php echo $row['id'];?>">
            </form>
          </div><!--  右下欄 RIGHT-BOTTOM 結束    -->
        </div><!--   右欄 RIGHT 結束    -->
      </div><!--    下欄 DOWN 結束    -->
</body>
</html>
