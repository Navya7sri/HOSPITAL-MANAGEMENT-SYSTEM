<!DOCTYPE html>
<html>
<head>
<title>LIFETIME HOSPITAL</title>
<style>
body {
			background-image:url('hospital1.jpg');
			background-repeat:no-repeat;
			background-size:cover;
			}
table {

width: 50%;
color: black;
font-family: monospace;
font-size: 19px;
text-align: center;
}
th {
border-collapse: collapse;
background-color: blue;
color: white;
}

</style>
</head>
<body>
<table style="margin:0px">
<td style="text-align:center"> DOCTOR DETAILS</td>>
<tr>
<th>DOCTOR ID</th>
<th>DOCTOR NAME</th>
<th>SPECIALITY</th>
<th>YEAR_OF_EXP</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hospital");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["DOCTOR_ID"]. "</td>
<td>" . $row["DOCTOR_NAME"] . "</td>
<td>".$row["SPECIALITY"].  "</td>
<td>" .$row["YEAR_OF_EXP"]. "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<p>
	Do you want to go to homepage <a href="web1.html">Click Here</p>
</table>
</body>
</html>