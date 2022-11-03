<?php
	$host = "localhost";
    $user = "root";
    $pass = "";
	$database = "Attendance";
	$connection = mysqli_connect($host, $user, $pass)
    or die ("couldn't connect to database");
	mysqli_select_db ($connection,$database);
	
  $roll = $_POST['roll'];
  $section = $_POST['section'];
  $code = $_POST['code'];
  $year = $_POST['year'];
  $message = $_POST['message'];
  if($roll = null){
	  echo "<h1>Please Fill in Roll Number</h1>";
  }
	else {$query = "INSERT INTO `Messages` (`Message_ID`, `roll`, `section`, `code`, `year`, `message`)
					VALUES (NULL, '$roll',
						'$section', '$code',
						'$year','$message')";

    $ret = mysqli_query ($connection, $query);
	if ($ret){
	echo "<h1>Message Sent</h1>";
	}
	else{
		echo mysqli_error($connection);
	}
    }
?>
