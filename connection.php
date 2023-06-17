<?php
	$conn = mysqli_connect("localhost","username","password"); //yaha username and password ki jagah database ka username (prolly root) and password rahega
	if(!$conn) {
		die('Connection failed : '.mysqli_error());
	}

	if(mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS form_db")) {
		echo "database created";
		header('location:invalid2.html');
	}
	else echo "error creating database : ".mysqli_error();

	mysqli_select_db($conn, "form_db");
	$sql = "CREATE TABLE IF NOT EXISTS Student(Name varchar(50), Roll int, Branch varchar(50), Semester varchar(15))";
	
	mysqli_query($conn, $sql);
	
	$name = $_POST['name'];
	$roll = $_POST['rollno'];
	$branch = $_POST['branch'];
	$sem = $_POST['semester'];

	$sql = "INSERT INTO Student(Name, Roll, Branch, Semester) VALUES('$name', '$roll', '$branch', '$sem')";

	mysqli_query($conn, $sql);

	mysqli_close($conn);

?>