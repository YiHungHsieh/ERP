<?php session_start();
  if ($_SESSION['id']== NULL)
  {
    header('Location:log_login.php');
  }  ?>
<!DOCTYPE html>
<html>
<head>
	<title>公告</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		.clearfix{
			content: "";
    		clear: both;
    		display: table;
    		width: 90%;
    		border-bottom: solid 1px #CCC;
    		margin: auto;
		}
		.col{
			float:left;
		}
		#title:hover{
			background-color:#FFDDAA;
			font-weight:bolder;
		}
	</style>
</head>
<body>
  <div class="top">
  <img class="titleImg" src="https://cdn.unwire.hk/wp-content/uploads/2014/10/facebook-user.jpg" width="70" height="50">
		<a href="../Controller/log_logout.php">
			<i id="topIcon" class="material-icons" >exit_to_app</i>
		</a>
		<a href="#">
			<i id="topIcon" class="material-icons">notifications</i>
		</a>
    <?php if ($_SESSION['root'] == 'admin'){?>
		    <a href="../admin-Model/admin_index.php">
			    <i id="topIcon" class="material-icons">https</i>
		    </a><?php }
    ?>
	</div>
<!--    上欄 TOP 結束        -->
	<div class="down">
    <!--     左欄 LEFT 開始     -->
			<div class="left">
				<div class="left-top">
					<p class="left-top-title">一般員工</p>
				</div>
		<!--    左上欄 LEFT-TOP 結束    -->
				<div class="left-bottom">
					<div class="left-title" >
						<a href="user_profile.php" style="margin:auto 20px">個人資料</a>
					</div>
					<div class="left-title" >
						<a href="user_introduction.php" style="margin:auto 20px">歡迎使用</a>
					</div>
					<div class="left-title">
						<a href="user_index.php"style="margin:auto 20px">行事曆</a>
					</div>
					<div class="left-title" style="background-color:#FFDDAA">
						<p style="margin:auto 20px">公佈欄</p>
					</div>
					<div class="left-title">
						<a href="#" style="margin:auto 20px">打卡資訊</a>
					</div>
					<div class="left-title">
						<p style="margin:auto 20px">表單申請</p>
					</div>
						<div  class="left-list">
							<a href="user_leave.php" style="margin:auto 35px">請假申請</a>
						</div>
						<div class="left-list">
							<a href="user_bTrip.php" style="margin:auto 35px">出差申請</a>
						</div>
						<div class="left-list">
							<a href="user_overtime.php" style="margin:auto 35px">加班申請</a>
						</div>
						<div class="left-list">
							<a href="user_bTrip_list.php" style="margin:auto 35px">差勤明細</a>
						</div>
					<div class="left-title">
						<a href="#" style="margin:auto 20px">員工訓練</a>
					</div>
          <div class="left-title">
            <a href="#" style="margin:auto 20px">更改密碼</a>
          </div>
				</div><!--左下 LEFT-BOTTOM 結束 -->
			</div><!--左 LEFT 結束 -->
<!--    右欄 RIGHT 開始     -->
		<div class="right">
			<div class="right-top">
				<p class="right-top-title">公告欄</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
			<div style="margin-top: 15px"><!--right down-->
  			<?php
  				$servername = "localhost";
  				$username = "root";
  				$password = "root";
  				$dbname = "peopleresource";
  				try {
  				    $conn = mysqli_connect($servername,$username ,$password,$dbname);
  				    $sql = "SELECT * FROM `news` ORDER BY id DESC";
  				    // use exec() because no results are returned
  				    $result = mysqli_query($conn,$sql);
  				    }
  				catch(PDOException $e)
  				    {
  				    echo $sql . "<br>" . $e->getMessage();
  				    }
  				while($row=mysqli_fetch_array($result)){ ?>
  				  <a href="user_selectNews.php?id=<?php echo $row['id']?>">
  				  <div id="title" class="clearfix">
  					<div class="col" style="margin-left:10px;font-family:Microsoft JhengHei"><p style="font-size: 20px">
  						<?php echo $row['title'];?></p></div>
  					<div style="float:right; margin-right:15px;font-family:Microsoft JhengHei"><p><?php echo $row['release'];?></p></div>
  				  </div></a>
  			<?php } ?>
			</div><!--  右下欄 RIGHT-BOTTOM 結束    -->
		</div><!--   右欄 RIGHT 結束    -->
	</div><!--    下欄 DOWN 結束    -->
</body>
</html>
