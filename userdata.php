<!DOCTYPE html>
<html>
<head>
	<title>data</title>
	<style type="text/css">
	body{
		background: yellowgreen;
	}
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
		.option1 input[ type="submit"]{

    border: none;
    outline: none;
    height: 45px;
    width: 15%;
   background: brown;
    color: white;
    font-size: 18px;
    border-radius: 20px;
     top: 50%;
    left: 40%;
    #transform: translate(-50%,-50%);
    position: fixed;
    padding: 70px,30px;
    transition: transform .2s;
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
<div class="option1">
    <form action="clogin.html">
        <input type="submit" name="" value="LOGOUT" >
        </form>
    </div>


<?php
$conn=mysqli_connect("localhost","root","","sdproject");
if($conn-> connect_error){
	die("connection failed".$conn-> connect_error);

}
 	$username = $_POST['Name'];
   $password = $_POST['password'];
$sql="SELECT uid,name,events from users where name='$username' and password='$password'";
$result=$conn->query($sql);
if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["uid"]."</td><td>".$row["name"]."</td><td>".$row["events"]."<?td>";
		
	}
	echo "</table>";
}
else{
	header('Location:clogin.html');
}
$conn->close();
?>
</table>

</body>
</html>