<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";
$reason=$_GET['reason'];
$name=$_GET['name'];
try {
    $conn = mysqli_connect($servername,$username ,$password,$dbname);
    

    switch ($_GET['table']) {
      case 'btrip':
        switch ($_GET['who']) {
          case 'hr':
            if($_GET['yesNO']=='yes'){
              $sql = "UPDATE `business` SET b_hrCheck='通過' WHERE id={$_GET['id']}";
              mysqli_query($conn,$sql);

              $sql="UPDATE `message` SET businessMsg='你的出差申請人資已通過' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);
            }
            else{
              $sql = "UPDATE `business` SET b_hrCheck='不通過',b_bossCheck=' ',b_reason='$reason' WHERE id={$_GET['id']}";
              $result=mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET returnBusinessMsg='你的出差申請人資已退件', businessMsg='' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);

            }
            break;
          case 'boss':
            if($_GET['yesNO']=='yes'){
              $sql = "UPDATE `business` SET b_bossCheck='通過' WHERE id={$_GET['id']}";
              $result=mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET businessMsg='你的出差申請老闆已通過' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);
            }
            else{

              $sql = "UPDATE `business` SET b_bossCheck='不通過',b_reason='$reason' WHERE id={$_GET['id']}";
              $result=mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET returnBusinessMsg='你的出差申請老闆已退件', businessMsg='' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);
            }
            break;
          default:
            break;
        }
        mysqli_query($conn,$sql);
        header("Location:../admin-Model/admin_bTrip.php");
        break;# btrip-END
      case 'leave':
        switch ($_GET['who']) {
          case 'hr':
            if($_GET['yesNO']=='yes'){
              $sql = "UPDATE `leave` SET l_hrCheck='通過' WHERE id={$_GET['id']}";
              mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET leaveMsg='你的請假申請人資已通過' WHERE name='$name'";
              
              $result=mysqli_query($conn,$sql);
            }
            else{
              $sql = "UPDATE `leave` SET l_hrCheck='不通過',l_bossCheck=' ',l_reason='$reason' WHERE id={$_GET['id']}";
              $result=mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET returnLeaveMsg='你的請假申請人資已退件', leaveMsg='' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);
            }
            break;
          case 'boss':
            if($_GET['yesNO']=='yes'){
              $sql = "UPDATE `leave` SET l_bossCheck='通過' WHERE id={$_GET['id']}";
              $result=mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET leaveMsg='你的請假申請老闆已通過' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);
            }
            else{
              $sql = "UPDATE `leave` SET l_bossCheck='不通過', l_reason='$reason' WHERE id={$_GET['id']}";
               mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET returnLeaveMsg='你的請假申請老闆已退件', leaveMsg='' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);
            }
            break;
          default:
            break;
        }
        mysqli_query($conn,$sql);
        header("Location:../admin-Model/admin_leave.php");
        break;# leave-END
      case 'overtime':
        switch ($_GET['who']) {
          case 'hr':
            if($_GET['yesNO']=='yes'){
              $sql = "UPDATE `overtime_apply` SET o_hrCheck='通過' WHERE id={$_GET['id']}";
              mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET overTimeMsg='你的加班申請人資已通過' WHERE name='$name'";
              mysqli_query($conn,$sql);
            }
            else{
              $sql = "UPDATE `overtime_apply` SET o_hrCheck='不通過',o_bossCheck=' ' WHERE id={$_GET['id']}";
              $result=mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET returnOvertimeMsg='你的加班申請人資已退件', overTimeMsg='' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);
            }
            break;
          case 'boss':
            if($_GET['yesNO']=='yes'){
              $sql = "UPDATE `overtime_apply` SET o_bossCheck='通過' WHERE id={$_GET['id']}";
              $result=mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET overTimeMsg='你的加班申請老闆已通過' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);
            }
            else{
              $sql = "UPDATE `overtime_apply` SET o_bossCheck='不通過' WHERE id={$_GET['id']}";
              $result=mysqli_query($conn,$sql);
              $sql="UPDATE `message` SET returnOvertimeMsg='你的加班申請老闆已退件', overTimeMsg='' WHERE name='$name'";
              $result=mysqli_query($conn,$sql);
            }
            break;
          default:
            break;
        }
        mysqli_query($conn,$sql);
        header("Location:../admin-Model/admin_overtime.php");
        break;# overtime-END
      default:
        break;
      }
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>
