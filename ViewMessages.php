<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Edit Class</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/class.js"></script>
  <style>.form-control{display:inline-block !important; width: 185px !important; margin:5px !important;}.details{padding:5px 10px;margin-bottom:30px;border: 1px solid lightgrey;border-top: none;}}</style>
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
            <li><a href="teacher.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
           
			<li><a href="statistics.php">Statistics</a></li>
			<li><a href="class.php">Edit Class</a></li>
			<li class="active"><a href="ViewMessages.php">View Messages</a></li>
			<li><a href="logout.php">Logout</a></li>
          
          </ul>
        </div>
      </div>
    </nav></br></br></br></br>
  <div class="container">
    <h2> Messages From Students </h2>
    <?php
        $host = "localhost";
		$user = "root";
		$pass = "";
		$database = "Attendance";
		$connection = mysqli_connect($host, $user, $pass)
		or die ("couldn't connect to database");
		mysqli_select_db ($connection,$database);
		$resultSet =$connection->query("SELECT * FROM messages");
          if($resultSet->num_rows !=0)
			   while($rows = $resultSet->fetch_assoc())
                    {
						$roll = $rows['roll'];
                        $section = $rows['section'];
                        $code = $rows['code'];
                        $year = $rows['year'];
						$message = $rows['message'];
          echo '<ul class="nav nav-tabs">
                  <li class="active"><a href="#"><strong>'.$code.' ( '.$year.' ) , '.'</strong></a></li>
                </ul>';
          echo $message;
          
      
					}else{
                    echo "No Results";
					mysqli_error($connection);
                }
        
      
    ?>
  </div>
 </body>
</html>
