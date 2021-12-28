<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<style type="text/css">
	body {
	font-family: Arial, Helvetica, sans-serif;
	background-color: white;
	}
	* {
		box-sizing: border-box;
	}
	.container {
		padding: 16px;
		background-color: white;
	}
	input[type=text], input[type=password] {
		width: 100%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
	}
	input[type=text]:focus, input[type=password]:focus
	{
		background-color: #ddd;
		outline: none;
	}
	hr {
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
	}
	.registerbtn {
		background-color: pink;
		color: white;
		padding: 16px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
		opacity: 0.9;
		font-size: 16px;
	}
	.registerbtn:hover {
		opacity: 1;
	}
	a {
		color: dodgerblue;
	}
	.signin {
		background-color: #f1f1f1;
		text-align: center;
	}
	form {
		width: 40%;
		margin-left: 600px;
		margn-top: 20px;
	}
	#gambar {

		float: left;
		width: 57%;
		margin: 0 auto;
	}

	h1 {
		text-align: center;
		color: white;
		padding-top: 20px;
		margin: 0 auto;
	}
	header {
		background-color: pink;
		height: 80px;
	}
</style>
<body>
	<header>
		<h1>PT Jaya Abadi</h1>
	</header>
		<form action="proses_login.php" method="POST">
		<div class="container">
			<h2>LOGIN</h2>
			<p>Please fill in this form to enter the web page</p>
			<hr>
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" >
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" >
			<hr>
			<button type="submit" class="registerbtn" name="submit">Login</button>
		</div>
	</form>
	</div>
</body>
</html>