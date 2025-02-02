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
border-collapse: collapse;
width: 50%;
color: green;
font-family: monospace;
font-size: 19px;
text-align: center;
}
th {
background-color: blue;
color: white;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}


</style>
</head>
<body>
<table class="center">
<table style="margin:0px">
<td style="text-align:center"> Pharmacy details</td>
<tr>
<th>PHARMACY NAME</th>
<th>PHARMACY AREA</th>
<th>PHARMACY NO</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hospital");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM pharmacy";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["PHARMACY_NAME"]. "</td>
<td>" . $row["PHARMACY_AREA"] . "</td>
<td>" . $row["PHARMACY_NO"] . "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<p>
	Do you want to go to homepage <a href="web1.html">Click Here</p>
</body>
</html>