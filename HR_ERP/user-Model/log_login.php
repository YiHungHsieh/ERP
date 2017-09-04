<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8" />
		<title>登入</title>
		<link rel="stylesheet" href="../view/indexStyle.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
		<script src="sweetalert/dist/sweetalert-dev.js"></script>
	<style>
		fieldset{
			font-family:Microsoft JhengHei;
			width:20%;
			margin:auto;
			padding:20px;}
		.confirm{
			background-color: #FFBB66;
		}
	</style>
	</head>
	<body>
		<div class="top">
		<a href="user_index.php">
		<img class="titleImg" src="https://cdn.unwire.hk/wp-content/uploads/2014/10/facebook-user.jpg" width="70" height="50">
		</a>
	</div>
	<div>
		<?php
			if(($_GET['msg'])!=""){?>
					<script>
					swal.setDefaults({ confirmButtonColor: '#FFBB66' });
					swal("請輸入正確的帳號及密碼!");
					</script>
			<?php } ?>
		<form method="post" action="../Controller/log_checkUser.php">
			<fieldset>
			<legend>員工登入</legend>
			<div>
			編號：<input type="text" name="username">
			</div>
			<div>
			密碼：<input type="password" name="password">
			</div>
			<button class="btn" type="submit" >登入</button>
			</fieldset>
		</form>
	</div>

	</body>
</html>
