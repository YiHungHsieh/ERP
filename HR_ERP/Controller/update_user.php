<?php session_start(); ?>
<?php
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
$a_root=$POST_['a_root'];

try {

    $conn = mysqli_connect($servername,$username ,$password,$dbname);

    $sql = "UPDATE `employees` SET `e_sn`='$e_sn',`e_date`='$e_date',`e_name_cn`='$e_name_cn',`e_name_en`='$e_name_en',`e_sex`='$e_sex',`e_birth`='$e_birth',
    `e_personalID`='$e_personalID',`e_marriage`='$e_marriage',`e_blood`='$e_blood',`e_address`='$e_address',`e_mobile`='$e_mobile',`e_email`='$e_email',
    `e_emergency`='$e_emergency',`e_em_mobile`='$e_em_mobile',`e_edu`='$e_edu',`e_edu_high`='$e_edu_high',`e_edu_dep`='$e_edu_dep',`e_edu_start`='$e_edu_start',
    `e_edu_end`='$e_edu_end',`e_edu_gra`='$e_edu_gra',`e_exp_com1`='$e_exp_com1',`e_exp_posi1`='$e_exp_posi1',`e_exp_start1`='$e_exp_start1',`e_exp_reason1`='$e_exp_reason1',
    `e_license`='$e_license',`e_exp_end1`='$e_exp_end1',`e_exp_com2`='$e_exp_com2',`e_exp_posi2`='$e_exp_posi2',`e_exp_start2`='$e_exp_start2',`e_exp_end2`='$e_exp_end2',
    `e_exp_reason2`='$e_exp_reason2',`e_exp_com3`='$e_exp_com3',`e_exp_posi3`='$e_exp_posi3',`e_exp_start3`='$e_exp_start3',`e_exp_end3`='$e_exp_end3',
    `e_exp_reason3`='$e_exp_reason3',`e_exp_com4`='$e_exp_com4',`e_exp_posi4`='$e_exp_posi4',`e_exp_start4`='$e_exp_start4',`e_exp_end4`='$e_exp_end4',
    `e_exp_reason4`='$e_exp_reason4',`e_exp_com5`='$e_exp_com5',`e_exp_posi5`='$e_exp_posi5',`e_exp_start5`='$e_exp_start5',`e_exp_end5`='$e_exp_end5',
    `e_exp_reason5`='$e_exp_reason5',`e_type`='$e_type',`e_status`='$e_status',`e_location`='$e_location',`e_extension`='$e_extension' WHERE e_sn='$e_sn'";

    mysqli_query($conn,$sql);

    $_SESSION['temp']=$e_sn;

    $sql="UPDATE `account` SET a_root='$a_root' WHERE a_sn='$e_sn'";
    mysqli_query($conn,$sql);
    header("Location:../admin-Model/admin_pvProfile.php");
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
