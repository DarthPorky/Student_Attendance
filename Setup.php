<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
          
          </ul>
        </div>
      </div>
    </nav></br></br></br></br></br></br></br></br></br>
 <div class="container">
  <div id="output"></div>
  <h1>
  <p>Setup Page</p>
  <?
	$host = "localhost";
    $user = "root";
    $pass = "";
	$database = "Attendance";
	
	
	$connection = mysqli_connect($host, $user, $pass)
    or die ("couldn't connect to database");
	
	

	$query = "DROP DATABASE `Attendance`";
	$ret = mysqli_query($connection, $query);
	
	if ($ret)
	{
		echo "DATABASE Dropped</br>";
	}
	
	
	$query = "CREATE DATABASE `Attendance`";
	$ret  = mysqli_query($connection, $query);
	
	if ($ret)
	{
		echo "DATABASE Created</br>";
	}

	mysqli_select_db ($connection,$database);

	$query = "CREATE TABLE IF NOT EXISTS `objects` (
			  `uid` int(11) NOT NULL AUTO_INCREMENT,
			  `teacher_uid` int(11) NOT NULL,
			  `code` varchar(50) NOT NULL,
			  `year` varchar(10) NOT NULL,
			  `section` varchar(50) NOT NULL,
			  `object` longblob NOT NULL,
			  PRIMARY KEY (`uid`),
			  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	$ret = mysqlI_query($connection, $query);
	
	if ($ret)
	{
		echo mysqli_error($connection);
		echo "objects Created Succesfully</br>";
	}
	
	
	$query = "CREATE TABLE IF NOT EXISTS `teacher` (
			  `uid` int(11) NOT NULL AUTO_INCREMENT,
			  `name` varchar(25) NOT NULL,
			  `email` varchar(25) NOT NULL,
			  `phone` varchar(25) NOT NULL,
			  `password` varchar(100) NOT NULL,
			  PRIMARY KEY (`uid`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	$ret = mysqlI_query($connection, $query);
	
	if ($ret)
	{
		echo "teacher Successfully Created</br>";
	}
	$query = "	Create Table Messages ( Message_ID integer not null auto_increment PRIMARY KEY,
				roll varchar(30),
				section varchar(30),
				code varchar(30),
				year varchar(30),
				message varchar(100))";
	$ret = mysqlI_query($connection, $query);
	
	if ($ret)
	{
		echo mysqli_error($connection);
		echo "Messages Created</br>";
	}
	
?>

</h1>
  </div>
  </div>
      <footer style="background:; height:;">
       </footer>

    
 </body>
</html>


