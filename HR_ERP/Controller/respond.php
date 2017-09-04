<?php session_start();
  if ($_SESSION['id']== NULL)
  {
    header('Location:log_login.php');
  }  

$name=$_SESSION['name'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

				$conn = mysqli_connect($servername,$username ,$password,$dbname);
			    $sql = "SELECT * FROM `news` WHERE id='".$_GET['id']."'";
				$result = mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($result);
				$check=strpos($row['respond'],$_SESSION['name']);
				if($check===false){
				$text=$row['respond'];
				if($row['respond']==""){
				$respond="";
				$respond=$text.$_SESSION['name'];
			}else{
				$respond=$text."/".$_SESSION['name'];
			}
				$sql="UPDATE `news`  SET respond='$respond' WHERE id='".$_GET['id']."'";
				$result = mysqli_query($conn,$sql);
				header("Location:user_news.php");
			}else{
				echo '已簽過';
			}
?>
			
			