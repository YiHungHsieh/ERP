<?php session_start();
  if ($_SESSION['id']== NULL)
  {
    header('Location:log_login.php');
  }  ?>
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "SELECT * FROM `overtime_apply` WHERE o_name='".$_SESSION['name']."'";
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
  table{
    width: 100%;
  }
</style>
</head>
<body>
  <title>一般員工</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../view/indexStyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
              <a href="user_bTrip.php" style="margin:auto 35px">出差申請</a>
            </div>
            <div class="left-list">
              <a href="user_overtime.php" style="margin:auto 35px">加班申請</a>
            </div>
            <div class="left-list">
              <p style="margin:auto 35px;color:#FFAA33;font-weight:500">差勤明細</p>
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
        <p class="right-top-title">差勤明細</p>
      </div>
  <!--    右上欄 RIGHT-TOP 結束    -->
      <div class="right-bottom">
        <div style="width:100%;height:50px;margin:auto;;border-bottom:solid 1px #CCC;">
          <div style="float:left">
            <a href="user_bTrip_list.php" class="right-title">出差明細</a>
          </div>
          <div style="float:left">
            <a href="user_leave_list.php"class="right-title">請假明細</a>
          </div>
          <div style="float:left;background-color:#FFDDAA">
            <p class="right-title">加班明細</p>
          </div>
        </div>
  <!--  右下欄上方選擇列 結束   -->
			  <div  style="margin:10px 10px">
		      <table cellspacing="0"  style="border:solid 2px white ">
      			<th style="min-width:9%;width:9%">申請人</th>
      			<th style="min-width:11%;width:11%">加班日期</th>
      			<th style="min-width:8%;width:8%">開始時間</th>
      			<th style="min-width:8%;width:8%">結束時間</th>
      			<th style="min-width:9%;width:9%">加班費時數</th>
      			<th style="min-width:8%;width:8%">補修時數</th>
      			<th style="min-width:16%;width:16%">加班事由</th>
      			<th style="min-width:15%;width:15%">備註</th>
      			<th style="min-width:8%;width:8%">人資確認</th>
      			<th style="min-width:8%;width:8%">老闆確認</th>
        		<?php
        		while($row = mysqli_fetch_array($result)) {
        		?>
        		<tr>
        			<td><?php echo $row["o_name"]; ?></td>
        			<td><?php echo $row["o_date"]; ?></td>
        			<td><?php echo substr($row["o_start"],0,-3);?></td>
        			<td><?php echo substr( $row["o_end"],0,-3);?></td>
        			<td><?php echo $row["o_hrs"];?></td>
        			<td><?php echo $row["o_phrs"]?></td>
        			<td><?php echo $row["o_state"]?></td>
        			<td><?php echo $row["o_comment"];?></td>
        			<td><?php echo $row["o_hrCheck"]; ?></td>
        			<td><?php echo $row["o_bossCheck"]; ?></td>
        		</tr>
          <?php } ?>
          </table>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname = "peopleresource";
          try {
              $conn = mysqli_connect($servername,$username ,$password,$dbname);
              $sql = "SELECT SUM(`o_hrs`),SUM(`o_phrs`) FROM `overtime_apply` WHERE o_name='".$_SESSION['name']."'";
              // use exec() because no results are returned
              $result2 = mysqli_query($conn,$sql);
              }
          catch(PDOException $e)
              {
              echo $sql . "<br>" . $e->getMessage();
              }
           $row2 = mysqli_fetch_array($result2); ?>
           <table cellspacing="0" style="border:solid 1px white ">
            <tr>
           <td colspan="5" style="border-top:solid 2px white;border-bottom:solid 2px white">加班費總時數:<?php echo $row2["SUM(`o_hrs`)"]; ?></td>
           <td colspan="5" style="border-top:solid 2px white;border-bottom:solid 2px white">補修總時數:<?php echo $row2["SUM(`o_phrs`)"]; ?></td>
            </tr>
          </table>
<!-- 第一個表格結束  -->
	</body>
</html>
