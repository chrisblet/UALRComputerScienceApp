 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles.css">
        
    <title>Degrees and Courses</title>
</head>
  
  
<!-- NAVBAR -->
<nav class="navbar navbar-light" id="mainNav">
  <div class="container">
      <a href="#page-top"class="navbar-brand js-scroll-trigger"><img src="img/navualr.png"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fa fa-bars"></i></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href ="index.php" class="nav-link js-scroll-trigger">Home Page</a></li>
              <li class="nav-item"><a href ="Scholarship.php" class="nav-link js-scroll-trigger">Scholarship Opportunities</a></li>
              <li class="nav-item"><a href ="Housing.php" class="nav-link js-scroll-trigger">Housing Information</a></li>
              <li class="nav-item"><a href ="Contact.php" class="nav-link js-scroll-trigger">Contact</a></li>
              <li class="nav-item"><a href ="Userhome.php" class="nav-link js-scroll-trigger">User Home Place Holder</a></li>
          </ul>
      </div><!-- END nabarResponsive -->
    </div><!-- END container -->
</nav><!-- NAVBAR --> 
  
  
 <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <div class = "card">
      <div class = "card-body">
        <p>
        CPSC Degrees:
        <li><a href="/degrees/minor_cs.pdf">Minor</a></li>
        <li><a href="/degrees/associates_of_science_cs.pdf">Associates of Science</a></li>
        <li><a href="/degrees/bachelors_of_science_cs.pdf">Bachelor's of Science</a></li>
        <li><a href="/degrees/bachelors_of_science_cs_game_option.pdf">Bachelor's of Science (Game Option)</a></li>
        </p>
            
        <p>Courses</p>
    
        <?php
			//include 'connect.php'; //wasn't sure how to work with php pointers, so I used a direct connection
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
		
            $sql = "SELECT * FROM classes;";
            $result = mysqli_query($db, $sql);
    
            $rcheck = mysqli_num_rows($result);
                
            echo "<table border='1'>
            <tr>
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Description</th>
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
                    echo "<td>" . $row['cnumber'] . "</td>";
                    echo "<td>" . $row['cname'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            mysqli_close($con);
            ?>
        </div>
    </div>
        
<!-- Footer -->
 <div class="d-flex flex-column">
  <div id="footer">
    <div class="container-fluid ">
      <div class="row  ">
        <div class="col-md-3 col-sm-3 col-12"><br>
            <img src="img/UAFooter.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-4 col-sm-4 col-12"><br><br>
            <span class="align-middle"><p class="lead text-white">UA Little Rock is a metropolitan research university in the South that provides accessibility to a quality education through flexible learning and unparalleled internship opportunities.</p></span>
        </div>
          
        <div class ="col-md-3 col-sm-3 col-6 text-center">
          <p class="lead text-white">
              <br><br>
              2801 S. University Ave.<br> Little Rock, AR 72204 <br><br> <b>501-569-3000</b></p>
        </div>       
          <div class = "col-md-2 col-sm-2 col-6 text-right" id="links">           
            <div class="col-md-12   ">
              <h1 class="font-weight-light mt-4 text-white">Links</h1>
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="Scholarship.php">Scholarships</a></li>
                <li><a href="Housing.php">Housing</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="newuser.php">Register</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="Courses.php">Courses</a></li>
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
</body>