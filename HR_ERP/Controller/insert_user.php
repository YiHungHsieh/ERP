<?php session_start(); ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

$e_sn=$_POST['e_sn'];
$e_date=$_POST['e_date'];
$e_name_cn=$_POST['e_name_cn'];
$e_name_en=$_POST['e_name_en'];
$e_sex=$_POST['e_sex'];
$e_birth=$_POST['e_birth'];
$e_personalID=$_POST['e_personalID'];
$e_marriage=$_POST['e_marriage'];
$e_blood=$_POST['e_blood'];
$e_address=$_POST['e_address'];
$e_mobile=$_POST['e_mobile'];
$e_email=$_POST['e_email'];
$e_emergency=$_POST['e_emergency'];
$e_em_mobile=$_POST['e_em_mobile'];
$e_edu=$_POST['e_edu'];
$e_edu_high=$_POST['e_edu_high'];
$e_edu_dep=$_POST['e_edu_dep'];
$e_edu_start=$_POST['e_edu_start'];
$e_edu_end=$_POST['e_edu_end'];
$e_edu_gra=$_POST['e_edu_gra'];
$e_exp_com1=$_POST['e_exp_com1'];
$e_exp_posi1=$_POST['e_exp_posi1'];
$e_exp_start1=$_POST['e_exp_start1'];
$e_license=$_POST['e_license'];
$e_exp_end1=$_POST['e_exp_end1'];
$e_exp_reason1=$_POST['e_exp_reason1'];
$e_exp_com2=$_POST['e_exp_com2'];
$e_exp_posi2=$_POST['e_exp_posi2'];
$e_exp_start2=$_POST['e_exp_start2'];
$e_exp_end2=$_POST['e_exp_end2'];
$e_exp_reason2=$_POST['e_exp_reason2'];
$e_exp_com3=$_POST['e_exp_com3'];
$e_exp_posi3=$_POST['e_exp_posi3'];
$e_exp_start3=$_POST['e_exp_start3'];
$e_exp_end3=$_POST['e_exp_end3'];
$e_exp_reason3=$_POST['e_exp_reason3'];
$e_exp_com4=$_POST['e_exp_com4'];
$e_exp_posi4=$_POST['e_exp_posi4'];
$e_exp_start4=$_POST['e_exp_start4'];
$e_exp_end4=$_POST['e_exp_end4'];
$e_exp_reason4=$_POST['e_exp_reason4'];
$e_exp_com5=$_POST['e_exp_com5'];
$e_exp_posi5=$_POST['e_exp_posi5'];
$e_exp_start5=$_POST['e_exp_start5'];
$e_exp_end5=$_POST['e_exp_end5'];
$e_exp_reason5=$_POST['e_exp_reason5'];
$e_type=$_POST['e_type'];
$e_status=$_POST['e_status'];
$e_location=$_POST['e_location'];
$e_extension=$_POST['e_extension'];
$a_root=$_POST['a_root'];
$e_picPath=$_POST['image_path'];
$image_path_value = '../image/'.$e_picPath;
try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "INSERT INTO  `employees` (e_sn, e_date, e_name_cn, e_name_en, e_sex, e_birth, e_personalID, e_marriage, e_blood,
      e_address, e_mobile, e_email, e_emergency, e_em_mobile, e_edu, e_edu_high, e_edu_dep, e_edu_start, e_edu_end, e_edu_gra,
      e_exp_com1, e_exp_posi1, e_exp_start1, e_exp_reason1, e_license, e_exp_end1, e_exp_com2, e_exp_posi2,
      e_exp_start2, e_exp_end2, e_exp_reason2, e_exp_com3, e_exp_posi3, e_exp_start3, e_exp_end3, e_exp_reason3,
      e_exp_com4, e_exp_posi4, e_exp_start4, e_exp_end4, e_exp_reason4, e_exp_com5, e_exp_posi5, e_exp_start5,
      e_exp_end5, e_exp_reason5, e_type, e_status, e_location, e_extension,e_picPath)
	     VALUES ('$e_sn', '$e_date','$e_name_cn', '$e_name_en', '$e_sex','$e_birth','$e_personalID','$e_marriage','$e_blood',
         '$e_address','$e_mobile','$e_email','$e_emergency','$e_em_mobile','$e_edu','$e_edu_high','$e_edu_dep','$e_edu_start',
         '$e_edu_end','$e_edu_gra','$e_exp_com1', '$e_exp_posi1','$e_exp_start1','$e_exp_reason1', '$e_license','$e_exp_end1',
         '$e_exp_com2', '$e_exp_posi2','$e_exp_start2','$e_exp_end2', '$e_exp_reason2', '$e_exp_com3', '$e_exp_posi3', '$e_exp_start3',
          '$e_exp_end3','$e_exp_reason3','$e_exp_com4', '$e_exp_posi4', '$e_exp_start4', '$e_exp_end4', '$e_exp_reason4','$e_exp_com5',
          '$e_exp_posi5','$e_exp_start5','$e_exp_end5', '$e_exp_reason5','$e_type','$e_status','$e_location', '$e_extension','$image_path_value');";
    var_dump($sql);
    mysqli_query($conn,$sql);

	  $_SESSION['temp'] = $e_sn;

    $sql = "INSERT INTO `account` (a_root,a_name,a_sn) VALUES('$a_root','$e_name_cn','$e_sn');";
    mysqli_query($conn,$sql);
    header("Location:../admin-Model/admin_pvProfile.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
