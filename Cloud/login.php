<?php
$dbusername="root";
$dbpassword="sudipdas";
$localhost="localhost";
$database="user_login_info";

$con=mysql_connect($localhost,$dbusername,$dbpassword) or die('database login problem');
mysql_select_db($database,$con) or die('database selection problem');
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

	$query = mysql_query("select username,password from info where username='$username' and password='$password';") or die('query error');
	if(mysql_num_rows($query) != null){
		 $_SESSION['admin_login']=$username;

		echo "login success \n";
		header('Location:http://localhost/profile.php?'.$username);

	}
	else{
		echo "failed \n";
	}

echo $username;
echo $password;



?>