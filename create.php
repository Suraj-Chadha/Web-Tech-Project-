<?php
	$conn = mysqli_connect("localhost","root","","newspaperblog");
	if(!$conn){
		die("connection failed :".mysqli_connect_error());
	}
	$newurl = "login.html";
	$sql = "INSERT INTO users(fname,lname,Email,DOB,Password,PIN)
	VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[Email]','$_POST[DOB]','$_POST[Password]','$_POST[pin]')";
	if (mysqli_query($conn,$sql) === TRUE) {
    	header('Location: '.$newurl);
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	$conn->close();
?>
