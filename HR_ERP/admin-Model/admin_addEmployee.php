<?php session_start();
  if ($_SESSION['id']== NULL )
  {
    header('Location:../user-Model/og_login.php');
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
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script>
  $(function(){
    var today = new Date();
    var tomorrow = new Date(today.getTime() + 24 * 60 * 60 * 1000);
    $('.end').datepicker();
    $('.start').datepicker();
  });
  $.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
  function showStuff(id, btn) {
    if(document.getElementById(id).style.display == 'none')
    {
      document.getElementById(id).style.display = 'block';
      btn.style.display="none";
    }
    else{
    }}
  </script>
  <style >
    td{
      text-align: left;
      font-size: 14px;
      width:550px;
      padding-left: 10px;
      height: 20%;
    }
    input,textarea,select{
       font-size:16px;
       font-family:Microsoft JhengHei;
       background-color:	#FCFCFC;
       border:solid 0.5px #CCC;
       border-radius: 5px;
       padding-left: 10px;
    }
    table{
      width:90%;
      margin: auto;
    }
    input:focus,select:focus{
      border:solid 2px 	#FF8000;
      border-radius: 5px;
      outline: none;
    }
    .addButton{
      background-color: #FF8040;
      border:0px;
      color: white;
      font-weight: 600;
      padding-left: 5px;
    }
    .form{
      margin-top: 40px;
      margin-left: 80px;
      margin-right: 80px;
      background-color:white;
      border-radius:3px;
      padding-bottom:30px;
      padding-top:20px
    }
    .tdtitle{
      color:#666666;
      font-size:12px
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
							<a href="admin_editEmployee.php" style="margin:auto 35px">編輯員工資料</a>
						</div>
						<div class="left-list">
							<p style="margin:auto 35px;color:#FFAA33;font-weight:500">新增員工資料</p>
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
				<p class="right-top-title">新增員工資料</p>
			</div>
<!-- 右上 RIGHT-TOP 結束   -->
			<div class="right-bottom">
			<form method="post" action="../Controller/insert_user.php">

        <div class="form">
          <table cellspacing="0" style="margin-top:10px;">
            <td  style="font-size:20px;font-weight:550" colspan="2">員工基本資料</td>
					  <tr><td class="tdtitle">員工編號<br /><input type="text" name="e_sn" style="width:90%"></td>
					  <td class="tdtitle">到職日期<br /><input type="text" class="start" name="e_date" style="width:90%"></td></tr>
            <tr><td class="tdtitle">中文姓名<br /><input type="text" name="e_name_cn" style="width:90%"></td>
            <td class="tdtitle">英文姓名<br /><input type="text" name="e_name_en" style="width:90%"></td></tr>
            <tr><td><span class="tdtitle">性別<br /></span><input  type="radio" name="e_sex" value="男">男  <input type="radio" name="e_sex" value="女">女</td>
            <td><span class="tdtitle">婚姻<br /></span><input type="radio" name="e_marriage" value="已婚">已婚  <input type="radio" name="e_marriage" value="未婚">未婚</td></tr>
            <tr>
            <td><span class="tdtitle">血型<br /></span><input type="radio" name="e_blood" value="A">A  <input type="radio" name="e_blood" value="B">B  <input type="radio" name="e_blood" value="O">O  <input type="radio" name="e_blood" value="AB">AB </td>
            <td class="tdtitle">生日<br /><input type="text" class="start" name="e_birth" style="width:90%"></td></tr>
            <tr><td class="tdtitle">手機<br /><input type="text" name="e_mobile" style="width:90%"></td>
            <td class="tdtitle">身分證字號<br /><input type="text" name="e_personalID" style="width:90%"></td></tr>
            <tr><td colspan="2" class="tdtitle">通訊地址<br /><input type="text" name="e_address"style="width:95.1%"></td></tr>
            <tr><td colspan="2" class="tdtitle">郵件信箱<br /><input type="email" name="e_email" style="width:95.1%"></td></tr>
            <tr><td class="tdtitle">緊急聯絡人<br /><input type="text" name="e_emergency" style="width:90%"></td>
            <td class="tdtitle">緊急聯絡人手機<br /><input type="text" name="e_em_mobile" style="width:90%"></td></tr>
          </table>
        </div>
<!-- 學歷 -->
      <div class="form">
          <table cellspacing="0" style="margin-top:10px;">
            <td  style="font-size:20px;font-weight:550" colspan="3">學歷</td>
            <tr><td class="tdtitle">最高學歷<br />
						<select name="e_edu" style="width:89.5%">
							<option value="" selected></option>
							<option value="高中職">高中職</option>
							<option value="大專">大專</option>
							<option value="大學">大學</option>
							<option value="碩士">碩士</option>
							<option value="博士">博士</option>
						</select>
						</td>
            <td class="tdtitle">學校<br><input style="width:85%" type="text" name="e_edu_high"></td>
						<td class="tdtitle">科系<br><input style="width:85%" type="text" name="e_edu_dep"></td>
          </tr>
          <tr>
            <td class="tdtitle">起訖時間<br><input type="text" class="start" name="e_edu_start"  style="width:85%"></td >
						<td class="tdtitle"><br /><input type="text" class="end" name="e_edu_end"  style="width:85%"></td >
            <td><span class="tdtitle">畢/肄/就學<br /></span><input type="radio" name="e_edu_gra" value="畢業">畢業  <input type="radio" name="e_edu_gra" value="肄業">肄業  <input type="radio" name="e_edu_gra" value="就學">就學</td>
          </tr>
          </table>
        </div>
<!-- 第1個經歷 -->
        <div class="form">
            <table cellspacing="0" style="margin-top:10px;">
              <td  style="font-size:20px;width:100%;min-width:100%;font-weight:550" colspan="2">經歷</td>
              <tr><td class="tdtitle">公司名稱<br /><input style="width:90%" type="text" name="e_exp_com1"></td>
  						<td class="tdtitle">職稱<br /><input style="width:90%" type="text" name="e_exp_posi1"></td></tr>
  						<tr><td class="tdtitle">期間<br /><input style="width:90%" type="text" class="start" name="e_exp_start1"></td>
  						<td class="tdtitle"><br /><input style="width:90%" type="text" class="end" name="e_exp_end1"></td></tr>
  						<tr><td colspan="2" class="tdtitle">離職原因<br><input style="width:95.1%" type="text" name="e_exp_reason1"></td></tr>
              <tr><td><input type="button" onclick="showStuff('exp2',this)" value="＋" class="addButton"></td></tr>
            </table>
<!-- 第2個經歷 -->
            <table style="display:none" id="exp2">
              <tr><td class="tdtitle">公司名稱<br /><input style="width:90%" type="text" name="e_exp_com2" size="15"></td>
  						<td class="tdtitle">職稱<br /><input style="width:90%" type="text" name="e_exp_posi2" size="15"></td></tr>
  						<tr><td class="tdtitle">期間<br /><input style="width:90%" type="text" class="start" name="e_exp_start2"></td>
  						<td class="tdtitle"><br /><input style="width:90%" type="text" class="end" name="e_exp_end2"></td></tr>
              <tr><td colspan="2" class="tdtitle">離職原因<br></vr><input style="width:95.1%" type="text" name="e_exp_reason2"></td></tr>
              <tr><td><input type="button" onclick="showStuff('exp3',this)" value="＋" class="addButton"></td></tr>
            </table>
<!-- 第3個經歷 -->
            <table style="display:none" id="exp3">
              <tr><td class="tdtitle">公司名稱<br /><input style="width:90%" type="text" name="e_exp_com3" size="15"></td>
              <td class="tdtitle">職稱<br /><input style="width:90%" type="text" name="e_exp_posi3" size="15"></td></tr>
              <tr><td class="tdtitle">期間<br /><input style="width:90%" type="text" class="start" name="e_exp_start3"></td>
              <td class="tdtitle"><br /><input style="width:90%" type="text" class="end" name="e_exp_end3"></td></tr>
              <tr><td colspan="2" class="tdtitle">離職原因<br></vr><input style="width:95.1%" type="text" name="e_exp_reason3"></td></tr>
              <tr><td><input type="button" onclick="showStuff('exp4',this)" value="＋" class="addButton"></td></tr>
            </table>
<!-- 第4個經歷 -->
            <table style="display:none" id="exp4">
              <tr><td class="tdtitle">公司名稱<br /><input style="width:90%" type="text" name="e_exp_com4" size="15"></td>
              <td class="tdtitle">職稱<br /><input style="width:90%" type="text" name="e_exp_posi4" size="15"></td></tr>
              <tr><td class="tdtitle">期間<br /><input style="width:90%" type="text" class="start" name="e_exp_start4"></td>
              <td class="tdtitle"><br /><input style="width:90%" type="text" class="end" name="e_exp_end4"></td></tr>
              <tr><td colspan="2" class="tdtitle">離職原因<br></vr><input style="width:95.1%" type="text" name="e_exp_reason4"></td></tr>
              <tr><td><input type="button" onclick="showStuff('exp5',this)" value="＋" class="addButton"></td></tr>
            </table>
<!-- 第5個經歷 -->
            <table style="display:none" id="exp5">
              <tr><td class="tdtitle">公司名稱<br /><input style="width:90%" type="text" name="e_exp_com5" size="15"></td>
              <td class="tdtitle">職稱<br /><input style="width:90%" type="text" name="e_exp_posi5" size="15"></td></tr>
              <tr><td class="tdtitle">期間<br /><input style="width:90%" type="text" class="start" name="e_exp_start5"></td>
              <td class="tdtitle"><br /><input style="width:90%" type="text" class="end" name="e_exp_end5"></td></tr>
              <tr><td colspan="2" class="tdtitle">離職原因<br></vr><input style="width:95.1%" type="text" name="e_exp_reason5"></td></tr>
            </table>
          </div>
<!-- 專長技能-->
              <div class="form">
                  <table cellspacing="0" style="margin-top:10px;">
                    <tr><td style="font-size:20px;width:100%;min-width:100%;font-weight:550">技能專長</td></tr>
                    <tr><td class="tdtitle">認證資格<br><input type="text" name="e_license" style="width:95.1%" placeholder="a,b,c,…"></td>
                  </tr>
                  </table>
              </div>
<!-- 在職狀態-->
              <div class="form">
                  <table cellspacing="0" style="margin-top:10px;">
                    <tr><td colspan="2" style="font-size:20px;width:100%;min-width:100%;font-weight:550">在職資訊</td></tr>
                    <tr><td><span class="tdtitle">工作狀態<br></span><input type="radio" name="e_status" value="已離職">已離職  <input type="radio" name="e_status" value="在職中">在職中</td>
                        <td><span class="tdtitle">工作型態<br></span><input type="radio" name="e_type" value="正職">正職<input type="radio" name="e_type" value="工讀">工讀</td></tr>
                    <tr><td><span class="tdtitle">工作地點<br></span><input type="radio" name="e_location" value="台北">台北  <input type="radio" name="e_location" value="中壢">中壢</td>
                        <td class="tdtitle">分機號碼<br><input type="text" name="e_extension" style="width:90%"></td></tr>
                    <tr><td><span class="tdtitle">員工型態<br></span><input type="radio" name="a_root" value="staff">一般員工  <input type="radio" name="a_root" value="admin">管理人員</td></tr>
                  </table>
              </div>
<!-- 上傳照片-->
              <div class="form">
                  <table cellspacing="0" style="margin-top:10px;">
                    <tr><td colspan="2" style="font-size:20px;width:100%;min-width:100%;font-weight:550">上傳照片</td></tr>
                    <tr><td>
                      <input type="file" name="image_path" accept="image/gif, image/jpeg, image/png">
                      <input type="hidden" id="image_path" value="">
                      <div class="image"></div>
                  </table>
              </div>
				  <input type="submit" class="btn" style="margin:15px 80px;" value="送出資料">
				</form>
			</div>
		</div>
	</div>
  <script>
   $(document).on("ready", function() {
      /**
       * 圖片上傳
       */
      //上傳圖片的input更動的時候
      $("input[name='image_path']").on("change", function() {
        //產生 FormData 物件
        var file_data = new FormData(),
            file_name = $(this)[0].files[0]['name'],
            save_path = "images/";
          alert(file_name);

        //在圖片區塊，顯示loading
        $("div.image").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');

        //FormData 新增剛剛選擇的檔案
        file_data.append("file", $(this)[0].files[0]);
        file_data.append("save_path", save_path);
        //透過ajax傳資料
        $.ajax({
          type : 'POST',
          url : '../Controller/preview_image.php',
          data : file_data,
          cache : false, //因為只有上傳檔案，所以不要暫存
          processData : false, //因為只有上傳檔案，所以不要處理表單資訊
          contentType : false, //送過去的內容，由 FormData 產生了，所以設定false
          dataType : 'html'
        }).done(function(data) {
          console.log(data);
          //上傳成功
          if (data == "yes") {
            //將檔案插入
            $("div.image").html("<img width='300' src='../" + save_path + file_name + "'>");
            //給予 #image_path 值，等等存檔時會用
            $("#image_path").val(save_path + file_name);
          } else {
            //警告回傳的訊息
            alert(data);
          }
        }).fail(function(data) {
          //失敗的時候
          alert("有錯誤產生，請看 console log");
          console.log(jqXHR.responseText);
        });
      });
    });
  </script>
</body>
</html>
