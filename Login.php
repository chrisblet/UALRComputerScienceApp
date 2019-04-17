<?php
include 'connect.php';
include 'Functions/userInit.php';
$loginFail = "";
if (isset($_POST['username']) && isset($_POST['password']))
{
    if (authenticate($_POST['username'], $_POST['password']))
    {
        setCookie("Username", $_POST['username']);
        setCookie("Password", $_POST['password']);
        header('Location: index.php');
    }
    else
    {
        $loginFail = "The username or password is incorrect.";
    }
}
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles.css">
    
    <title>UALR-Register/Login</title>
  </head>
  
  
   <!-- NAVBAR -->
   <nav class="navbar navbar-light" id="mainNav">
      <div class="container">
          <a href="#page-top"class="navbar-brand js-scroll-trigger"><img src="img/navualr.png"> Register or Login</a>
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
    <div class ="container col-9 col-md-5 col-xl-4" id="loginform">
      <div class ="card">
       <div class ="row text-center">
        <div class ="col text-center text-white">
            <h2>Login Here</h2>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="logForm col-9 col-md-9 align-self-center text-center">
          <form action="Login.php" method="post">
          <?php if(!empty($loginFail)) { echo "<label class='error'>$loginFail</label>"; } ?>
            <input type="text" name="username" class="form-control" placeholder="Username"><br>
            <input type="password" name="password" class="form-control" placeholder="Password"><br>
            <input type="submit" value="Submit" class="buttons btn btn-lg btn-primary btn-block">
          </form>
        </div>
        </div>
      </div>
    </div>
    

   
   

  
  <div id="regbonus">
      <div class="container col col-md-9 col-xl-7 " >
            <div class = "card">
            <div class ="row  text-white justify-content-center  ">
                <div class ="col text-center"><br>
          <h3> Register to Access Exclusive Content   </h3> <br></div>
            </div>
             
    
      <div class="row  justify-content-center">
          
           <div class="col-md-5 col-8 col-lg-5 ">
               <div id="regcard">
              <div class="card bg-dark text-center">
      <div class="card-img-overlay">
        <h5 class="card-title text-white text-drop">CS Resources</h5>
        <p class="card-text"></p>
        
      </div>
    </div>
               </div>      
            </div>  
       <div class="col-md-5 col-8 col-lg-5 ">
           <div id="regcard">
          <div  class="card bg-dark text-white text-drop text-center">
  
  <div class="card-img-overlay">
    <h5 class="card-title">UALR Events & Clubs</h5>
    <p class="card-text"></p>
    
  </div>
</div>
    </div>       
          </div>
       </div>
      <div class="row  justify-content-center">
       <div class="col-md-5 col-8 col-lg-5">
           <div id="regcard">
          <div class="card bg-dark text-white text-drop text-center">
  
  <div class="card-img-overlay">
    <h5 class="card-title">Job / Intership Board</h5>
    <p class="card-text"></p>
    
  </div>
</div>
           </div> 
          </div>
       <div class="col-md-5 col-8 col-lg-5">
           <div id="regcard">
          <div class="card bg-dark text-white text-drop text-center">
  
  <div class="card-img-overlay">
    <h5 class="card-title">Degree & Class List</h5>
    <p class="card-text"></p>
    
  </div>
</div>
           </div>    
          </div>     
       </div><br>
          <div class ="row  justify-content-center">
              
          <a class="btn btn-primary" href="newuser.php" role="button">New Users Register Here</a></div><br>
      </div> 
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