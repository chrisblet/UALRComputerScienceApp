 <?php
$username = $_COOKIE["Username"];
$password = $_COOKIE["Password"];

if (empty($username) || empty($password)) {
  echo "<script> alert('You are not logged in.')</script>";
  header('Location: Login.php');
} else {
  
}

?>
 
 
 <html lang="en">
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles.css">
        
    <title>Clubs</title>
</head>
  
  
      <!-- NAVBAR -->
   <nav class="navbar navbar-light" id="mainNav">
      <div class="container">
          <a href="#page-top"class="navbar-brand js-scroll-trigger"><img src="img/navualr.png"> Clubs</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fa fa-bars"></i></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href ="index.php" class="nav-link js-scroll-trigger">Home</a></li>
              <li class="nav-item"><a href ="Scholarship.php" class="nav-link js-scroll-trigger">Scholarship Opportunities</a></li>
              <li class="nav-item"><a href ="Housing.php" class="nav-link js-scroll-trigger">Housing Information</a></li>
              <li class="nav-item"><a href ="Contact.php" class="nav-link js-scroll-trigger">Contact</a></li>
              <li class="nav-item"><a href ="Userhome.php" class="nav-link js-scroll-trigger">User Home</a></li>
              <li class="nav-item"><a href ="logout.php" class="nav-link js-scroll-trigger">Log out</a></li>
              </ul>
          </div><!-- END nabarResponsive -->
      </div><!-- END container -->
   </nav>
   <!-- END NAVBAR --> 
  
  
 <body>
     
<div id="clubjumbo" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-white text-drop">Clubs & Events</h1>
    <p class="lead text-white tag-line col-md-9 col-lg-8">Start building your resume and make meaningful connections by joining a club or participate with the student body by attending university events.</p>
  </div>
</div> 

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="Userhome.php">Userhome</a></li>
    <li class="breadcrumb-item"><a href="CS Resources.php">CS Resources</a></li>
    <li class="breadcrumb-item active" aria-current="page">Events & Clubs</li>
    <li class="breadcrumb-item"><a href="https://ualr.edu/eit/jobs/">Job & Interships</a></li>
    <li class="breadcrumb-item"><a href="Class List & Degree Plan.php">Degree & Class</a></li>
  </ol>
</nav>

<br>
 <div class ="container">
     <div class ="card">
         <div class="card-body">
      <h5 class="card-title">Events @ UALR</h5>
      <p class="card-text">The UALR Events page lists all upcoming College events on campus, ranging from world-class speakers to events coordinated by our diverse student organizations.

Click the link below to view upcoming events on the University of Arkansas Little Rock campus!</p>
    </div>
   <div class ="row justify-content-center">
      <div class="logForm col-6 col-md-6 text-center">
        <form action="https://ualr.edu/www/events/" method="post">
          <input type="submit" value="UALR Events" class="buttons btn btn-lg btn-primary btn-block">
        </form>
      </div>
    </div>
    </div>
</div>
<br>
   
  <div class = "card">
      <div class = "card-body">
          <div class ="row justify-content-center">
            
      <?php
			$dbHost = "connect-c9.ckrgpw7vzckl.us-east-2.rds.amazonaws.com";
			$dbUsername = "tbdUser";
			$dbPassword = "TBD_coolRanchDoritos";
			$dbName = "tbd_Database";
			$dbPort = 3306;
			
			$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);
			
			if ($db->connect_error) 
			{
			 die("Connection failed: " . $db->connect_error);
			}
		
	        	$db->set_charset("utf8");
		
            $sql = "SELECT * FROM clubs;";
            $result = mysqli_query($db, $sql);
    
            $rcheck = mysqli_num_rows($result);
                
            echo "<table border='1'>
           
           <style>
             th {
                  background-color: #6F2232;
                  color: white;
                }
                
              td {
                    text-align: center;
                    padding: 4px;
                }
            
            tr:nth-child(even) {background-color: #f2f2f2;}
             tr:hover {background-color: #ddd;
           </style>
           
           
            <tr>
            <th>Club Name</th>
            <th>Type</th>
            <th>Advisor</th>
            <th>Email</th>
            </tr>";
                
            if($rcheck < 0)
            {
                echo "Error: The table was empty";
            }
            else
            {
                
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['club_name'] . "</td>";
                    echo "<td>" . $row['club_type'] . "</td>";
                    echo "<td>" . $row['advisor_name'] . "</td>";
                    echo "<td>" . $row['advisor_email'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            mysqli_close($con);
            ?>
            </div>
        </div>
    </div>
        
<!-- Footer -->
 <div class="d-flex flex-column">
  <div id="footer">
    <div class="container-fluid ">
      <div class="row  ">
        <div class="col-md-3 col-sm-12 col-12"><br>
            <img src="img/UAFooter.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-4 col-sm-12 col-12"><br><br>
            <span class="align-middle"><p class="lead text-white">UA Little Rock is a metropolitan research university in the South that provides accessibility to a quality education through flexible learning and unparalleled internship opportunities.</p></span>
        </div>
          
        <div class ="col-md-3 col-sm-6 col-6 text-center">
          <p class="lead text-white">
              <br><br>
              2801 S. University Ave.<br> Little Rock, AR 72204 <br><br> <b>501-569-3000</b></p>
        </div>       
          <div class = "col-md-2 col-sm-6 col-6 text-right" id="links">           
            <div class="col-md-12   ">
              <h1 class="font-weight-light mt-4 text-white">Links</h1>
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="Scholarship.php">Scholarships</a></li>
                <li><a href="Housing.php">Housing</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="Login.php">Login/Register</a></li>
                <li><a href="Userhome.php">User Home</a></li>
              </ul>
            </div>             
          </div>          
      </div>     
    </div>
  </div>
  
    <footer id="sticky-footer" class=" text-white">
    <div class="container text-center">
      <small>Copyright &copy; ToBeDeveloped</small>
        &emsp;
        &emsp;
    <a href ="https://www.facebook.com/ualittlerock"><i class ="fab fa-facebook-square fa-2x" ></i></a>
        <a href ="https://twitter.com/UALR"><i class ="fab fa-twitter-square fa-2x"></i></a>
        <a href ="https://www.youtube.com/user/UALRVIDEO"><i class ="fab fa-youtube-square fa-2x"></i></a>
        <a href ="https://www.linkedin.com/groups/University-Arkansas-Little-Rock-UALR-65628/"><i class ="fab fa-linkedin fa-2x"></i></a>
    </div>
  </footer>
</div>

<!-- END Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>