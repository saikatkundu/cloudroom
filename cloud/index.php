<html>

	<head>
		<link href="css\index.css" rel="stylesheet" type="text/css" media="screen" />
	</head>

	<body>
		<div class="container">
      		<div class="header">
      			<font face="myFirstFont" size="6">Cloudroom <center class="center"> Welcome</center></font>
      		</div>
		</div>
		<div id="login_box" class="login_box">
			<font id="login_font" class="login_font">Login</font>
			<form action="login.php" method="post">
				<div id="input_field" class="input_field">
					<ul class="input-list style-1 clearfix">
    				<li>
      					<input type="text" placeholder=":UserName" name="username">
    				</li>
    				<br>
    				<li>
      					<input type="password" placeholder=": Password" class="focus" name="password">
    				</li>
  					</ul>
  				</div>


				<input type="submit" value="Login" name="login" class="login_submit" id="login_submit">
			</form>
		</div>
		
		<img src="pic\images.png" id="register_icon" class="register_icon"></img>
	

	</body>

</html>