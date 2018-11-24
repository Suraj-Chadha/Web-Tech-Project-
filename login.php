<?php
	extract($_GET);
	$conn = mysqli_connect("localhost","root","","newspaperblog");
	if(!$conn){
		die('connection failed');
	}
	$newurl = "web.htm";
	$query = "select fname,lname,Email,Password from users;";
	$res = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($res);
	while($row = mysqli_fetch_array($res))
		if(((($row["fname"].' '.$row["lname"]) == $_GET['username'])||$row["Email"] == $_GET["username"] )&& $row["Password"] == $_GET["password"]){
			header('Location: '.$newurl);
				exit;
		}
?>