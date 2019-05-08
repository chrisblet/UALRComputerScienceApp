<?php
$username = $_COOKIE["Username"];
$password = $_COOKIE["Password"];

if (empty($username) || empty($password)) {
  echo "<script> alert('You are not logged in.')</script>";
  header('Location: Login.php');
} else {
  
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles.css">
    
    <title>UALR-User Home</title>
  </head>
  
  
   <!-- NAVBAR -->
   <nav class="navbar navbar-light" id="mainNav">
      <div class="container">
          <a href="#page-top"class="navbar-brand js-scroll-trigger"><img src="img/navualr.png"> User Home</a>
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
   </nav><!-- NAVBAR --> 
  
  
  <body>
    
 <div id="userhome" class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3 text-white text-drop">User Home</h1>
        <p class="lead text-white tag-line col-md-9 col-lg-8">Sharpen your skills, locate an intership, build lasting friendships, and prepare for the future at UALR.</p>
      </div>
</div>


    
      
<div id="usernavhub">
   <div class="container" >
        <div class ="row text-white justify-content-center text-drop ">
          <h3>Navigation Hub  </h3> </div>
              <div class="row  justify-content-center">
               <div class="col-md-6 ">
                   <a href ="CS Resources.php">
                      <div class="card bg-dark ">
                          <img src="img/csresource.jpg" class="card-img" alt="...">
                          <div class="card-img-overlay">
                            <h5 class="card-title text-white text-drop tag-line text-center ">CS Resources</h5>
                            <p class="card-text"></p>
                          </div>
                        </div>
                   </a>     
            </div>  
       <div class="col-md-6">
           <a href ="Clubs.php">
          <div class="card bg-dark text-white text-drop ">
              <img src="img/ualrclub.jpg" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title tag-line text-center">UALR Events & Clubs</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
           </a> 
         </div>
       </div>
        <br>
      <div class="row justify-content-center">
       <div class="col-md-6">
           <a href ="https://ualr.edu/eit/jobs/">
              <div class="card bg-dark text-white text-drop ">
              <img src="img/ualrjob.jpg" class="card-img" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title tag-line text-center">Job & Intership Board</h5>
                    <p class="card-text"></p>
                  </div>
            </div>
          </a>
     </div>
       <div class="col-md-6">
           <a href ="Class List & Degree Plan.php">
              <div class="card bg-dark text-white text-drop">
                  <img src="img/degree.jpg" class="card-img" alt="...">
                      <div class="card-img-overlay">
                        <h5 class="card-title tag-line text-center">Degree & Class List</h5>
                        <p class="card-text"></p>
                      </div>
            </div>
          </a> 
        </div>
    </div>
    </div>    
 </div>
 
 
 <div class ="container">
   <div class ="row justify-content-center">
      <div class="logForm col-7 col-md-4 text-center">
        <form action="changeusername.php" method="post">
          <input type="submit" value="Change Username" class="buttons btn btn-lg btn-primary btn-block">
        </form>
      </div>
      </div>
    </div>
    <br>
    <div class ="container">
      <div class ="row justify-content-center">
      <div class="logForm col-7 col-md-4 text-center">
        <form action="changepassword.php" method="post">
          <input type="submit" value="Change Password" class="buttons btn btn-lg btn-primary btn-block">
        </form>
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