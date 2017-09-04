<?php session_start(); ?>
<?php
error_reporting(E_all);
ini_set('display_errors',1);


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "peopleresource";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_rror);
}
	//假設的有效會員帳號
	$id=$_POST['username'];
	$pw=$_POST['password'];

	$sql = "SELECT * FROM `account` where a_sn = '$id'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);

		//直接對傳過來的帳號密碼做比`對
	if($row['a_sn'] == $id && $row['a_password'] == $pw)
	{
		//如果密碼一樣，以及帳號一樣，那就代表正確，所以顯示登入成功
		//使用php header 來轉址 前往後台
		$_SESSION['id'] = $row['a_sn'];
		$_SESSION['name'] = $row['a_name'];
    $_SESSION['root'] = $row['a_root'];
		header('Location: ../user-Model/user_index.php');

	}
	elseif($row['a_sn'] == $id && $row['a_password'] != $pw)
	{
		header('Location:../user-Model/log_login.php?msg=pwerror');
	}
  elseif($row['a_sn'] != $id && $row['a_password'] != $pw){
    header('Location:../user-Model/log_login.php?msg=iderror');
  }
  elseif ($id==NULL && $pw ==NULL ){
    header('Location:../user-Model/log_login.php?msg=error');
  }
?>
