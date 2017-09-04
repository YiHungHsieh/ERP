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
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script>
  $(function(){
    var today = new Date();
    var tomorrow = new Date(today.getTime() + 24 * 60 * 60 * 1000);
    $('#end').datepicker();
    $('#start').datepicker({
      onSelect: function (dat, inst) {
        $('#end').datepicker('option', 'minDate', dat);
      }
    });
  });
  $.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
  </script>
  <style>
    input,textarea{
       font-size:18px;
       font-family:Microsoft JhengHei;
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
					<div class="left-title">
						<a href="user_introduction.php" style="margin:auto 20px">歡迎使用</a>
					</div>
					<div class="left-title">
						<a href="user_index.php"style="margin:auto 20px">行事曆</a>
					</div>
					<div class="left-title">
						<a href="user_news.php" style="margin:auto 20px">公佈欄</a>
					</div>
					<div class="left-title">
						<a href="#" style="margin:auto 20px">打卡資訊</a>
					</div>
					<div class="left-title" style="background-color:#FFDDAA">
						<p style="margin:auto 20px">表單申請</p>
					</div>
						<div  class="left-list">
							<a href="user_leave.php" style="margin:auto 35px">請假申請</a>
						</div>
						<div class="left-list">
							<p style="margin:auto 35px;color:#FFAA33;font-weight:500">出差申請</p>
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
				<p class="right-top-title">出差申請</p>
			</div>
<!--    右上欄 RIGHT-TOP 結束    -->
			<div class="right-bottom">
				<form style="margin-left:30px" method="post" action="../Controller/insert_bTrip.php">
					<p>申請人：<?php echo $_SESSION['name'];?></p>
					<p>預計出發日期/時間：<input type="text" id="start" name="b_startDate" size="10"> / <input type="time" name="b_startTime" size="7"></p>
					<p>預計結束日期/時間：<input type="text" id="end" name="b_endDate" size="10"> / <input  type="time" name="b_endTime" size="7"></p>
					<p>出差時數：<input type="text" name="b_totalTime" size="5"></p>
					<p>出差地點：<input type="text" name="b_location" size="15" placeholder=" ex:台北市"></p>
					<p>出差事由：<br><textarea name="b_state" cols="75" rows="2"  placeholder="請輸入詳細說明"></textarea></p>
					<p>備註：<br><textarea cols="75" rows="5" name="b_comment" size="50"></textarea></p>
					<input type="submit" name="" value="送出表單" size="6.5" class="btn">
				</form>
			</div><!--  右下欄 RIGHT-BOTTOM 結束    -->
		</div><!--   右欄 RIGHT 結束    -->
	</div><!--    下欄 DOWN 結束    -->
</body>
</html>
