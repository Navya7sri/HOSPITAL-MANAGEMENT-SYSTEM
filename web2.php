<?php
if(isset($_POST['NAME']))
{
	$yes=false;
	$insert=false;
	//$NAME,$LASTNAME,$AGE,$APPOINTMENTDATE,$ADDRESS,$="";
	$NAME=$_POST['NAME'];
	$LASTNAME = $_POST['LASTNAME'];
	$AGE= $_POST['AGE'];
	$APPOINTMENTDATE=$_POST['APPOINTMENTDATE'];
	$ADDRESS= $_POST['ADDRESS'];
	$SYMPTOMS= $_POST['SYMPTOMS'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','hospital');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else 
	{
		$sql ="insert into `patient`(`NAME`, `LASTNAME`, `AGE`, `APPOINTMENTDATE`,`ADDRESS`,`SYMPTOMS`) values ('$NAME', '$LASTNAME', '$AGE', '$APPOINTMENTDATE','$ADDRESS','$SYMPTOMS');";
		if($conn->query($sql))
		{
			echo "Insertion successful......";
			$insert=true;
		}
		$conn->close();
	}
	$yes=$insert;
}
?>
<DOCTYPE html>
<html>
<head>
	<title>LIFETIME HOSPITALS</title>
	<style>
		body {
			background-image:url("hospital1.jpg");
			background-repeat:no-repeat;
			background-size:cover;
			}
			h1 {
				color:black;
				margin:10px}

		form{
			width:25%;
			background:lightblue;
			}
			input[type="text"],[type="text"]{
				width:90%;
				heigth:40px;
				font-size:10px;
				margin:10px;
				outline:none;
				}
				input[type="date"],[type="date"]{
				width:90%;
				heigth:40px;
				font-size:10px;
				margin:10px;
				outline:none;
				}
				input[type="text"],[type="number"]{
				width:90%;
				heigth:40px;
				font-size:10px;
				margin:10px;
				outline:none;
				}
				input[type="submit"]{
					width:90%;
					color:white;
					background:red;
					cursor:pointer;
					outline:none;
					margin:10px;
					font-size:10
					3
					px;
					}
	</style>
	</title>


</head>


<body>

</body>
 <center>
 <h1>MAKE AN APPOINTMENT</h1>
 <form action="web2.php" method="post">
 <input type="text" name="NAME" id="NAME" placeholder="NAME"/></br>
 <input type="text"  name="LASTNAME" id="LASTNAME" placeholder="LASTNAME"/></br>
 <input type="number" name="AGE" id="AGE" placeholder="AGE"/></br>
 <input type="date" name="APPOINTMENTDATE" id="APPOINTMENTDATE" placeholder="APPOINTMENTDATE"/></br>
 <input type="text" name="ADDRESS" id="ADDRESS" placeholder="ADDRESS"/></br>
 <input type="text" name="SYMPTOMS" id="SYMPTOMS" placeholder="SYMPTOMS"/></br>
 <input type="submit" value="Submit"></br>
 </form>
 </center>
 <p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you want to go to homepage <a href="web1.html">Click Here</p>
</html>