<?php
	session_start();
	if(isset($_POST["submit"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	$uid=$_POST["uid"];
	$event=$_POST["event"];
	$b=implode(",",$event);
	
	$conn=mysqli_connect("localhost","root","","sdproject");
	if($conn)
			echo'connected';
	else
		echo'not connected';
	$sql="INSERT INTO users (uid,name,password,events) values('$uid','$username','$password','$b')";
	$result=mysqli_query($conn,$sql);
	
	if($result){
		$message1="Your information is saved successfully";
		echo'<script>alert("you have successfully signed up...");</script>';
		echo'<script>location.href="clogin.html"</script>';
		echo message1;
	}

	}
?>