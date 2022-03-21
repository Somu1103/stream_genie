<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login - Stream Genie</title>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
input {
	color: grey;
	width: 250px;
	padding: 10px;
	font-style: oblique;
	border-radius: 20px;
}
input:focus {
  border: 5px solid black;
}
</style>
</head>

<body style="background-image: url(bg.jpg); color:white; font-family: 'Aclonica'; font-size: 14px">
	<div style="text-align: center; padding-top:20px; font-family: 'Arizonia'; font-size: 90px">
		<p>Stream Genie</p>
	</div>
	<hr>
	<div style="text-align:center;">
		<br>
		<h2>Login</h2>
		<br>
		<form action="login.php" method = "post"  >
		<input type="text" name="user_name" placeholder="Username" required><br><br>
  		<input type="password" name="password" placeholder="Password" required><br><br>
  		<input type="submit" name="login" value="Submit" style="color: black; width: 100px " ><br>
		</form>
	</div>
</body>

</html>