<?php
$servername = "localhost";
$username = "root";
$password= "root";
$dbname = "peopleresource";
$timezone="Asia/Taipei";

 $conn = mysqli_connect($servername,$username ,$password,$dbname);

date_default_timezone_set($timezone); 
$action = $_GET['action'];
$id = (int)$_GET['id'];
switch($action){
	case 'add':
		addform();
		break;
	case 'edit':
		editform($id);
		break;
}

function addform(){
$date = $_GET['date'];
?>
<link rel="stylesheet" type="text/css" href="fullcalendar_drag/css/jquery-ui.css">
<div class="fancy">
    <h3>新建事件</h3>
    <form id="add_form" action="fullcalendar_drag/do.php?action=add" method="post">
    <p>日程內容：<input type="text" class="input" name="event" id="event" style="width:320px" placeholder="記錄你將做的一件事...."></p>
    <p>開始時間：<input type="text" class="input datepicker" name="startdate" id="startdate" value="<?php echo $date;?>" readonly>
    <span id="sel_start" style="display:none"><select name="s_hour">
        <option value="00">00</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08" selected>08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
    </select>:
    <select name="s_minute">
        <option value="00" selected>00</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
        <option value="30">30</option>
        <option value="35">35</option>
        <option value="40">40</option>
        <option value="45">45</option>
        <option value="50">50</option>
        <option value="55">55</option>
    </select>
    </span>
    </p>
    <p id="p_endtime" style="display:none">結束時間：<input type="text" class="input datepicker" name="enddate" id="enddate" value="<?php echo $date;?>" readonly>
    <span id="sel_end" style="display:none"><select name="e_hour">
        <option value="00">00</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12" selected>12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
    </select>:
    <select name="e_minute">
        <option value="00" selected>00</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
        <option value="30">30</option>
        <option value="35">35</option>
        <option value="40">40</option>
        <option value="45">45</option>
        <option value="50">50</option>
        <option value="55">55</option>
    </select>
    </span>
    </p>
    <p>顏色:<select name="color">
        <option value="#00DD00">綠色</option>
        <option value="#5555FF">藍色</option>
        <option value="#FF3333">紅色</option>
    </p>
    <p>
    <label><input type="checkbox" value="1" id="isallday" name="isallday" checked> 全天</label>
    <label><input type="checkbox" value="1" id="isend" name="isend"> 結束時間</label>
    </p>
    <div class="sub_btn"><input type="submit" class="btn btn_ok" value="確定"> <input type="button" class="btn btn_cancel" value="取消" onClick="$.fancybox.close()"></div>
    </form>
</div>
<?php }


function editform($id){
    $servername = "localhost";
$username = "root";
$password= "root";
$dbname = "peopleresource";


 $conn = mysqli_connect($servername,$username ,$password,$dbname);
    $sql="SELECT * FROM calendar where id='$id'";

	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_array($result);
	if($row){
		$id = $row['id'];
		$title = $row['title'];
		$starttime = $row['starttime'];
		$start_d = date("Y-m-d",$starttime);
		$start_h = date("H",$starttime);
		$start_m = date("i",$starttime);
		
		$endtime = $row['endtime'];
		if($endtime==0){
			$end_d = $startdate;
			$end_chk = '';
			$end_display = "style='display:none'";
		}else{
			$end_d = date("Y-m-d",$endtime);
			$end_h = date("H",$endtime);
			$end_m = date("i",$endtime);
			$end_chk = "checked";
			$end_display = "style=''";
		}
		
		$allday = $row['allday'];
		if($allday==1){
			$display = "style='display:none'";
			$allday_chk = "checked";
		}else{
			$display = "style=''";
			$allday_chk = '';
		}
	}
?>
<link rel="stylesheet" type="text/css" href="fullcalendar_drag/css/jquery-ui.css">
<div class="fancy">
	<h3>編輯事件</h3>
    <form id="add_form" action="fullcalendar_drag/do.php?action=edit" method="post">
    <input type="hidden" name="id" id="eventid" value="<?php echo $id;?>">
    <p>日程内容：<input type="text" class="input" name="event" id="event" style="width:320px" placeholder="记录你将要做的一件事..." value="<?php echo $title;?>"></p>
    <p>開始時間：<input type="text" class="input datepicker" name="startdate" id="startdate" value="<?php echo $start_d;?>" readonly>
    <span id="sel_start" <?php echo $display;?>><select name="s_hour">
    	<option value="<?php echo $start_h;?>" selected><?php echo $start_h;?></option>
    	<option value="00">00</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
    </select>:
    <select name="s_minute">
    	<option value="<?php echo $start_m;?>" selected><?php echo $start_m;?></option>
    	<option value="00">00</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
    </select>
    </span>
    </p>
    <p id="p_endtime" <?php echo $end_display;?>>結束時間：<input type="text" class="input datepicker" name="enddate" id="enddate" value="<?php echo $end_d;?>" readonly>
    <span id="sel_end"  <?php echo $display;?>><select name="e_hour">
    	<option value="<?php echo $end_h;?>" selected><?php echo $end_h;?></option>
    	<option value="00">00</option>
    	<option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
    </select>:
    <select name="e_minute">
    	<option value="<?php echo $end_m;?>" selected><?php echo $end_m;?></option>
    	<option value="00">00</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
    </select>
    </span>
    </p>
    <p>
    <label><input type="checkbox" value="1" id="isallday" name="isallday" <?php echo $allday_chk;?>> 全天</label>
    <label><input type="checkbox" value="1" id="isend" name="isend" <?php echo $end_chk;?>> 結束時間</label>
    </p>
    <div class="sub_btn"><span class="del"><input type="button" class="btn btn_del" id="del_event" value="刪除"></span><input type="submit" class="btn btn_ok" value="確定"> <input type="button" class="btn btn_cancel" value="取消" onClick="$.fancybox.close()"></div>
    </form>
</div>
<?php }?>
<script type="text/javascript" src="fullcalendar_drag/js/jquery.form.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".datepicker").datepicker({});
	$("#isallday").click(function(){
		if($("#sel_start").css("display")=="none"){
			$("#sel_start,#sel_end").show();
		}else{
			$("#sel_start,#sel_end").hide();
		}
	});
	
	$("#isend").click(function(){
		if($("#p_endtime").css("display")=="none"){
			$("#p_endtime").show();
		}else{
			$("#p_endtime").hide();
		}
		$.fancybox.resize();//調整高度
	});
	
	//提交表单
	$('#add_form').ajaxForm({
		beforeSubmit: showRequest, //表單驗證
        success: showResponse //成功返回
    }); 
	
	//刪除事件
	$("#del_event").click(function(){
		if(confirm("您確定要刪除嗎？")){
			var eventid = $("#eventid").val();
			$.post("fullcalendar_drag/do.php?action=del",{id:eventid},function(msg){
				if(msg==1){
					$.fancybox.close();
					$('#calendar').fullCalendar('refetchEvents'); //重新獲取所有事件數據
				}else{
					alert(msg);	
				}
			});
		}
	});
});

function showRequest(){
	var events = $("#event").val();
	if(events==''){
		alert("請輸入日程內容!");
		$("#event").focus();
		return false;
	}
}

function showResponse(responseText, statusText, xhr, $form){
	if(statusText=="success"){	
		if(responseText==1){
			$.fancybox.close();
			$('#calendar').fullCalendar('refetchEvents'); //重新獲取所有事件數據
		}else{
			alert(responseText);
		}
	}else{
		alert(statusText);
	}
}
</script>