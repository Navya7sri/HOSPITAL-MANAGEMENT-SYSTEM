
<DOCTYPE html>
<html>
<head>
<body>
	<style>
		body{
			background-image:url('hospital2.jpg');
			background-repeat:no-repeat;
			background-size:cover;
		}
		h1{
			color:lime;margin:10px;
		}
		form {
			width:25%;
			background:transparent;
		}
		input[type="text"],[type ="number"],[type="date"] {
			width:90%;
			height:40px;
			font-size:20px;
			margin:10px;
			outline:none;
			text-align:center;
			border : none;
			border-radius: 6px;
		}
		input[type="submit"]{
			width:30%;
			height:40px;
			cursor:pointer;
			font-size:15px;
			outline:none;
			margin:10px;
			border: none;
			border-radius: 6px;
			background-color: brown;
			color: white;
		}
		button{
			width: 10%;
			height: 40px;
			background-color: #e25310;
			color: white;
			font-size: 15px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
	
</head>
<center>
	<br><br><br><br><br><br><br><br><br><br>
	<h1 style="color: rgb(255, 255, 255)"> SIGN UP</h1>
	<form action="signup.php" method="post">
		<input type="text" name="name" placeholder="name"/></br>
		<input type="text" name="email" placeholder="email"/></br>
		<input type="text" name="password" placeholder="password"/></br>
		<input type="text" name="password_confirmation" placeholder="password_confirmation"/> </br>
		
		<input type="submit" value="submit"/>
	</form>
	<h3> Already have an account ? </h3>
		<button type = "button" onclick="location.href='DependentLogin.html'">Login</button>
		&nbsp;
		<button type = "button" onclick="location.href='web1.php'">Home</button></br>
</center>

?>
