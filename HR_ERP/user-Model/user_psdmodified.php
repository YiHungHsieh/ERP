<?php session_start();
  if ($_SESSION['id']== NULL)
  {
    header('Location:log_login.php');
  }  ?>
<!DOCTYPE html>
<html>
<head>
	<title>一般員工</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
	<script src="sweetalert/dist/sweetalert-dev.js"></script>
</style>

</script>
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
    <?php
    if ($_SESSION['root'] == 'admin'){?>
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
					<a href="user_index.php" style="margin:auto 20px">行事曆</a>
				</div>
				<div class="left-title">
					<a href="user_news.php" style="margin:auto 20px">公佈欄</a>
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
        		<div class="left-title" style="background-color:#FFDDAA">
					<p style="margin:auto 20px">更改密碼</p>
				</div>
			</div><!--左下 LEFT-BOTTOM 結束 -->
		</div><!--左 LEFT 結束 -->
<!--    右欄 RIGHT 開始     -->
		<div class="right">
			<div class="right-top">
				<p class="right-top-title">更改密碼</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
			<div class="right-bottom">
				<form method="post" action="user_psdmodified.php">
					<p>姓名:<?php echo $_SESSION['name']; ?></p>
					<p>舊密碼:<input type="password" name="a_password" /></p>
					<p>新密碼:<input type="password" name="a_pw1" /></p>
					<p>確認新密碼:<input type="password" name="a_pw2" /></p>
					<input type="submit" value="更新" />
				</form>
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "peopleresource";

				$conn = mysqli_connect($servername, $username, $password, $dbname);	

				$a_sn=$_SESSION['id'];
				$pw = $_POST['a_password'];
				$pw1 = $_POST['a_pw1'];
				$pw2 = $_POST['a_pw2'];

				$sql = "SELECT * FROM `account` WHERE a_sn=$a_sn";
				$result=mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);

				if( $_POST['a_password'] !=""){
					if( $pw != $row['a_password']){
						echo '<script type="text/javascript">swal.setDefaults({ confirmButtonColor: "#FFBB66" });swal("舊密碼錯誤");</script>';
					}else{
						if($pw1===$pw2){

								$sql="UPDATE `account` SET a_password= $pw1 WHERE a_sn=$a_sn";
								mysqli_query($conn,$sql);
								echo '<script type="text/javascript">swal.setDefaults({ confirmButtonColor: "#FFBB66" });swal("更改密碼成功");</script>';
						}else{
							echo '<script type="text/javascript">swal.setDefaults({ confirmButtonColor: "#FFBB66" });swal("新密碼與確認新密碼不相同");</script>';
						}
					}
				}else{
					echo '<script type="text/javascript">swal.setDefaults({ confirmButtonColor: "#FFBB66" });swal("舊密碼不能為空");</script>';
				}

				
				?> 
			</div><!--  右下欄 RIGHT-BOTTOM 結束    -->

		</div><!--   右欄 RIGHT 結束    -->
	</div><!--    下欄 DOWN 結束    -->
</body>
</html>
