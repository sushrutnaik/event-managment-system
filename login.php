<?php
   $con=mysqli_connect("localhost","root","","sdproject");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   $username = $_POST['Name'];
   $password = $_POST['password'];
   $result = mysqli_query($con,"SELECT * FROM users where 
   name='$username' and password='$password'");
   $row = mysqli_fetch_array($result);
   $data = $row[0];

   if($data){

     header('Location:userdata.php');
   }
   else{

     header('Location:clogin.html'); 
   }
   
   mysqli_close($con);
?>