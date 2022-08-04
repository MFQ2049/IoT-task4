<?php

$value = $_GET['value'];
$conn = new mysqli('127.0.0.1"','root','123456789','task4');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into table Sensor(value) values(?)");
		$stmt->bind_param("i", $value);
		$execval = $stmt->execute();
		echo $execval;
		echo "Value has been passed successfully";
		$stmt->close();
		$conn->close();
    }
?>