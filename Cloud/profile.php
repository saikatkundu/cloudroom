<?php
$host = "localhost";
$dbusername = "root";
$dbname = "user_login_info";
$dbpassword = "sudipdas";
$conn = mysql_connect($host,$dbusername,$dbpassword) or die('fail');
mysql_select_db($dbname,$conn) or die('unable');
session_start();
$username=$_SESSION['admin_login'];
if(!isset( $_SESSION['admin_login'])){
	header("index.php");

}
?>

<html>
	<head>
		<?php 

			$query = mysql_query("select * from info where username='$username'") or die(mysql_error());
			while($row=mysql_fetch_array($query)){
				$t_fullname = $row['fullname'];
			}

			echo '<title>'.$t_fullname.'</title>';
		?>
		<link href="css\index.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<div class="container">
      		<div class="header">
      			<font face="myFirstFont" size="6">Cloudroom <center class="center"> Welcome</center></font>
      		</div>
		</div>
	</body>
</html>

<?php
	if(isset($_POST['home_status_post'])){
		$user_post = $_POST['post_home'];
		$query = mysql_query("select * from info where username='$username'") or die(mysql_error());
		while($row=mysql_fetch_array($query)){
			$fullname = $row['fullname'].": ";
			$like = 0;
			$dislike = 0;

			$insert_query = mysql_query("insert into status(fullname,username,s_like,s_dislike,status)values('$fullname','$t_fullname','$like','$dislike','$user_post');") or die('Error:Insetion');
		}
	}
?>



	<html>
		<link href="css\home.css"rel="stylesheet" type="text/css" media"screen" />
		<body>
			<div id="post_div" class="post_div">
				<form action="" method="post" >
				<?php echo '
				<font color="red" class="post_username" id="post_username">'.$fullname.'</font>
				<font color="red" class="status">'.$user_post.'</font>';?>
				<input type="submit" value="POST" name="home_status_post" id="home_status_post" class="home_status_post">
				<textarea id="post_home" class="post_home" name="post_home" rows="4" cols="50" placeholder="Enter text here ..." ></textarea>

				</form>

				<!-- <textarea id="post_home" class="post_home" name="post_home" rows="4" cols="50" placeholder="Enter text here ..." form="home_status"></textarea> -->
			
			</div>

			<div id="chat_box" class="chat_box">

			</div>

		</body>
	</html>

