<?php session_start();
if ($_SESSION['id']== NULL)
{
  header('Location:log_login.php');
}   ?>
<!DOCTYPE html>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "peopleresource";
  try {
      $conn = mysqli_connect($servername,$username ,$password,$dbname);
      $sql = "SELECT * FROM `employees` WHERE e_name_cn = '".$_SESSION['name']."'";
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
	<title>一般員工</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
 		.profile-block{

			/*border: solid;*/
			/*height: 1000px;*/
			width: 90%;
			margin:auto;
			margin-top:30px;
      font-family: Microsoft JhengHei;
 		}
 		.p_sidebar{
 			display: inline-block;
 			position: relative;
 			/*border: solid;*/
			width:30%;
			/*height:300px; */
      font-family: Microsoft JhengHei;

 		}
 		.p_sidebar_intro{
 			display: inline-block;
 			/*position: relative;*/
 			/*border: solid;*/
			width:30%;
			/*height:500px; */
      font-family: Microsoft JhengHei;

 		}
 		.p_content{
 			float: right;
 			width:65% ;
			/*display: inline-block;*/
 			/*border: solid;*/
			/*height:300px; */
      font-family: Microsoft JhengHei;
 		}
 		.p_img{
 			/*margin:auto;*/
 			height:250px ;
 			width:220px ;
      font-family: Microsoft JhengHei;
 		}
 		table{
 			width:90%;
 			border:0px;
      font-family: Microsoft JhengHei;
 		}
 		tr,th,td{
 			border:0px;
 			padding:0 0 0 5px;
 			text-align:left;
      font-family: Microsoft JhengHei;
 		}
 		p{
 			margin-top:10px;
 			margin-bottom:10px;
      font-family: Microsoft JhengHei;
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
        <div class="left-title"  style="background-color:#FFDDAA">
          <p style="margin:auto 20px">個人資料</p>
        </div>
        <div class="left-title" >
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
				<p class="right-top-title">個人資料</p>
			</div>
			<div class="right-bottom">
				<div class="profile-block">
					<?php
						while($row = mysqli_fetch_array($result)) {
					?>
					<div class="p_sidebar">
						<div class="p_img">
						<img  src="http://www.freeiconspng.com/uploads/profile-icon-9.png" height="250" width="220">
						</div><br>
						<hr noshade  color="#A9A9A9" align="left" width="80%">
					</div>
					<div class="p_content"><br><br><br>
						<p>到職日期：<?php echo $row["e_date"];?></p>
						<p>郵件信箱：<?php echo $row["e_email"];?></p>
						<p>通訊地址：<?php echo $row["e_address"];?></p>
						<p>緊急聯絡人：<?php echo $row["e_emergency"];?></p>
						<p>緊急聯絡人手機：<?php echo $row["e_em_mobile"];?></p>
						<!-- <br><br><br><hr noshade align="left"> -->
					</div>

					<div class="p_content">
						<table>
						<tr>
						<th colspan="6" style="text-align:left">學歷</th>
						</tr>
						<tr>
						<td style="font-size:15px;background-color:#A9A9A9;width:15%"><?php echo $row["e_edu"];?></td>
						<td style="font-size:15px;background-color:#D3D3D3 "><?php echo $row["e_edu_high"];?></td>
						<td style="font-size:15px;background-color:#A9A9A9"><?php echo $row["e_edu_dep"];?></td>
						<td style="font-size:15px;background-color:#D3D3D3;width:20%"><?php echo $row["e_edu_start"];?></td>
						<td style="font-size:15px;background-color:#A9A9A9;width:20%"><?php echo $row["e_edu_end"]?></td>
						<td colspan="2" style="font-size:15px;background-color:#D3D3D3"><?php echo $row["e_edu_gra"];?></td>
						</table>
						<br><br><br>
						<!-- <hr noshade align="left"> -->
					</div>
					<div class="p_content">
						<table>
						<tr>
						<th colspan="6" style="text-align:left">經歷</th>
						</tr>
						<tr>
						<th style="font-size:15px;background-color:#A9A9A9;width:18% ">公司名稱</th>
						<th style="font-size:15px;background-color:#D3D3D3;width:18% ">職稱</th>
						<th colspan="2" style="font-size:15px;background-color:#A9A9A9;width:35% ">期間</th>
						<th colspan="2" style="font-size:15px;background-color:#D3D3D3">離職原因</th>
						</tr>
<!-- 經歷表格1  -->
						<tr>
						<td ><?php echo $row["e_exp_com1"];?></td>
						<td ><?php echo $row["e_exp_posi1"];?></td>
						<td ><?php echo $row["e_exp_start1"];?></td>
						<td ><?php echo $row["e_exp_end1"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason1"];?></td>
						</tr>
            <?php if($row["e_exp_start2"]!='0000-00-00'){?>
						<tr>
<!-- 經歷表格2  -->
            <td ><?php echo $row["e_exp_com2"];?></td>
						<td ><?php echo $row["e_exp_posi2"];?></td>
						<td ><?php echo $row["e_exp_start2"];?></td>
						<td ><?php echo $row["e_exp_end2"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason2"];?></td>
            </tr><?php }
            if($row["e_exp_start3"]!='0000-00-00'){?>
						<tr>
<!-- 經歷表格3  -->
            <td ><?php echo $row["e_exp_com3"];?></td>
						<td ><?php echo $row["e_exp_posi3"];?></td>
						<td ><?php echo $row["e_exp_start3"];?></td>
						<td ><?php echo $row["e_exp_end3"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason3"];?></td>
            </tr><?php }
            if($row["e_exp_start4"]!='0000-00-00'){?>
						<tr>
<!-- 經歷表格4  -->
            <td ><?php echo $row["e_exp_com4"];?></td>
						<td ><?php echo $row["e_exp_posi4"];?></td>
						<td ><?php echo $row["e_exp_start4"];?></td>
						<td ><?php echo $row["e_exp_end4"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason4"];?></td>
						</tr><?php }
            if($row["e_exp_start5"]!='0000-00-00') { ?>
						<tr>
<!-- 經歷表格5  -->
            <td ><?php echo $row["e_exp_com5"];?></td>
						<td ><?php echo $row["e_exp_posi5"];?></td>
						<td ><?php echo $row["e_exp_start5"];?></td>
						<td ><?php echo $row["e_exp_end5"];?></td>
						<td colspan="2"><?php echo $row["e_exp_reason5"];?></td>
          </tr><?php } ?>
						</table>
					</div>
					<div class="p_sidebar_intro">
						<p>員工編號：<?php echo $row["e_sn"];?></p>
						<p>姓名：<?php echo $row["e_name_cn"];?></p>
						<p>英文名：<?php echo $row["e_name_en"];?></p>
						<p>生日：<?php echo $row["e_birth"];?></p>
						<p>身分證：<?php echo $row["e_personalID"];?></p>
						<p>性別：<?php echo $row["e_sex"];?></p>
						<p>婚姻：<?php echo $row["e_marriage"];?></p>
						<p>血型：<?php echo $row["e_blood"];?></p>
						<p>手機：<?php echo $row["e_mobile"];?></p>
						<hr noshade color="#A9A9A9" align="left" width="80%">
						<p style="background-color:#C0C0C0;width:25%;text-align: center  ">技能專長</p>
						<p><?php echo $row["e_license"];?></p>

					</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>
</body>
</html>
