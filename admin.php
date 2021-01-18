<!DOCTYPE html>
<html>
<head>
	<title>data</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color:#d96459;
			font-family: monospace;
			font-size: 25px;
			text-align: left;

		}
		th{
			background-color: #d96459;
			color:white; 
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>uid</th>
			<th>name</th>
			<th>events</th>
		</tr>




<?php
$conn=mysqli_connect("localhost","root","","sdproject");
if($conn-> connect_error){
	die("connection failed".$conn-> connect_error);

}
$sql="SELECT uid,name,events from users";
$result=$conn->query($sql);
if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["uid"]."</td><td>".$row["name"]."</td><td>".$row["events"]."<?td>";
	}
	echo "</table>";
}
else{
	header('Location:adminpage.html');
}
$conn->close();
?>
</table>

</body>
</html>