<?php
if(isset($_POST['DRUGNAME']))
{
	$yes=false;
	$insert=false;
	//$NAME,$LASTNAME,$AGE,$APPOINTMENTDATE,$ADDRESS,$="";
	$DRUGNAME=$_POST['DRUGNAME'];
	$CHEMICALFORMULAE = $_POST['CHEMICALFORMULAE'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','hospital');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else 
	{
		$sql ="insert into `drug`(`DRUGNAME`, `CHEMICALFORMULAE`) values ('$DRUGNAME', '$CHEMICALFORMULAE');";
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
			input[type="text"],[type="number"]{
				width:90%;
				heigth:40px;
				font-size:30px;
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
					font-size:18px;
					}
	</style>
	</title>


</head>


<body>

</body>
 <center>
 <h1>NEW DRUG DETAILS</h1>
 <form action="web4.php" method="post">
 <input type="text" name="DRUGNAME" id="DRUGNAME" placeholder="DRUGNAME"/></br>
 <input type="text"  name="CHEMICALFORMULAE" id="CHEMICALFORMULAE" placeholder="CHEMICALFORMULAE"/></br>
 <input type="submit" value="Submit"></br>
 </form>
 </center>
 <p>
	do you want Doctor details <a href="web3.php">clickhere</p>

	<p> Do you want to go to homepage <a href="web1.html">Click Here</p>
</html>