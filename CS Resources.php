
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
    
    <title>UALR-Computer Science Resources</title>
    
 <!-- test -->
  </head>
  
  
   <!-- NAVBAR -->
   <nav class="navbar navbar-light" id="mainNav">
      <div class="container">
          <a href="#page-top"class="navbar-brand js-scroll-trigger"><img src="img/navualr.png"> CS Resources</a>
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
   
   
 <div id="csresource" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-white text-drop">CS Resources</h1>
    <p class="lead text-white tag-line col-md-9 col-lg-8">Stay in the lead with access to modern development techology, programming tutorials, and UALR tutoring information. </p>
  </div>
</div>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="Userhome.php">Userhome</a></li>
    <li class="breadcrumb-item active" aria-current="page">CS Resources</li>
    <li class="breadcrumb-item"><a href="Clubs.php">Events & Clubs</a></li>
    <li class="breadcrumb-item"><a href="https://ualr.edu/eit/jobs/">Job & Interships</a></li>
    <li class="breadcrumb-item"><a href="Class List & Degree Plan.php">Degree & Class</a></li>
  </ol>
</nav>
      
  <div class="container-fluid" id="development"> 
      <div class ="row text-white justify-content-center text-drop">
          <h3> Development Technology </h3> </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 d-flex">
            <div class="card col-md-12 ">
            <img src="img/vscode.png" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column ">
                <h5 class="card-title">Visual Studio Code</h5>
                <p class="card-text">Visual Studio Code is a lightweight but powerful source code editor which runs on your desktop and is available for Windows, macOS and Linux. It comes with built-in support for JavaScript, TypeScript and Node.js and has a rich ecosystem of extensions for other languages (such as C++, C#, Java, Python, PHP, Go).</p>
                  <div class="mt-auto">
                  <div class ="row justify-content-center fixed-row-bottom">
                  <a class="btn btn-primary" href="https://code.visualstudio.com/" role="button">Download</a> &nbsp; &nbsp; <a class="btn btn-primary" href="https://code.visualstudio.com/docs/getstarted/introvideos" role="button">Start Learning</a>
                  </div>
                  </div>
            </div>
            </div> 
          </div>
          <div class="col-md-6 col-sm-6 d-flex">
           <div class="card col-md-12 ">
         <img src="img/awscloud.jpg" class="card-img-top" alt="...">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">AWS Cloud9</h5>
                <p class="card-text">AWS Cloud9 is a cloud-based integrated development environment (IDE) that lets you write, run, and debug your code with just a browser. It includes a code editor, debugger, and terminal. Cloud9 comes prepackaged with essential tools for popular programming languages, including JavaScript, Python, PHP, and HTML.</p>
                         
                  <div class="mt-auto">
                  <div class ="row justify-content-center">
                  <a class="btn btn-primary" href="https://aws.amazon.com/cloud9/" role="button">Download</a> &nbsp; &nbsp; <a class="btn btn-primary" href="https://docs.aws.amazon.com/cloud9/latest/user-guide/tutorial.html" role="button">Start Learning</a>
                  </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
</div>  
   
<div id="programming" class="container text-white" >

      <!-- Page Heading -->
    <h1 class="my-4 text-drop text-center">Learn or Strengthen
        <small>your skills</small>
    </h1>
        

      <!-- Project One -->
      <div class="row">
        <div class="col-md-6">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/c++.jpg" alt="">
        </div>
        <div class="col-md-6">
          <h3 class="text-warning">C++</h3>
          <p>C++ is a general purpose programming language and widely used  for competitive programming. It has imperative, object-oriented and generic programming features. C++ runs on many platforms like Windows, Linux, Unix, and Mac.</p>
          <div class="dropdown text-center">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            C++  Resources
          </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="https://www.udemy.com/free-learn-c-tutorial-beginners/">Udemy C++ Beginner Tutorial</a>
                <a class="dropdown-item" href="https://www.udacity.com/course/c-for-programmers--ud210">Udacity C++ For Programmers</a>
                <a class="dropdown-item" href="http://www.quickcode.co/free/course/learn/Complete-C++-programming-from-Basics-to-Advance-level/3483">Quick Code Complete C++ Course</a>
                <a class="dropdown-item" href="https://www.w3schools.in/category/cplusplus-tutorial/">w3schools C++ Tutorials</a>
              </div>
            </div> 
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Two -->
      <div class="row">
        <div class="col-md-6"> 
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/java-card.jpg" alt="">
        </div>
        <div class="col-md-6">
          <h3 class="text-warning">Java</h3>
          <p>Java is among the most popular programming languages out there, mainly because of how versatile and compatible it is. Java can be used for a large number of things, including software development, mobile applications, and large systems development.</p>
          <div class="dropdown text-center">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Java  Resources
              </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="https://www.udemy.com/java-tutorial/">Udemy Java Beginner Tutorial</a>
                    <a class="dropdown-item" href="https://www.udacity.com/course/java-programming-basics--ud282">Udacity Java Programming Basics</a>
                    <a class="dropdown-item" href="https://www.coursera.org/specializations/java-programming">Coursera Java Programming Fundamentals</a>
                    <a class="dropdown-item" href="http://www.quickcode.co/free/course/learn/Learn-Java-Programming-/3460">Quick Code Learn Java Programming</a>  
                  </div>
            </div> 
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Three -->
      <div class="row">
        <div class="col-md-6">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/python.jpg" alt="">
        </div>
        <div class="col-md-6">
          <h3 class="text-warning">Python</h3>
          <p>Python is a general-purpose, versatile and popular programming language. It’s great as a first language because it is concise and easy to read. Python can be used for everything from web development to software development and scientific applications.</p>
          <div class="dropdown text-center">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Python  Resources
          </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="https://www.udemy.com/pythonforbeginnersintro/">Udemy Beginner Tutorial</a>
                <a class="dropdown-item" href="https://www.udacity.com/course/programming-foundations-with-python--ud036">Udacity Programming Foundations with Python</a>
                <a class="dropdown-item" href="https://www.coursera.org/specializations/python">Coursera Python for Everybody</a>
                <a class="dropdown-item" href="http://www.quickcode.co/free/course/learn/Learn-Python3-Programming/3143">Quick Code Learn Python Programming</a>
              </div>
            </div> 
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Four -->
      <div class="row">

        <div class="col-md-6">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/html.jpg" alt="">
        </div>
        <div class="col-md-6">
          <h3 class="text-warning">HTML, CSS, JS</h3>
          <p>HTML is the foundation behind most web pages. It’s used to add structure and form to text, images, and more. CSS is the language used to add style to HTML content. JavaScript makes HTML pages more dynamic and interactive.</p>
               
            <div class="dropdown text-center">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                HTML, CSS, JS  Resources
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="https://www.udemy.com/html-and-css-for-beginners-crash-course-learn-fast-easy/">Udemy HTML and CSS Beginner Tutorial</a>
                <a class="dropdown-item" href="https://learn.freecodecamp.org">freeCodeCamp Responsive Web Design</a>
                <a class="dropdown-item" href="https://www.udacity.com/course/intro-to-html-and-css--ud001">Udacity Intro to HTML and CSS</a>
                <a class="dropdown-item" href="https://www.coursera.org/learn/html-css-javascript-for-web-developers">Coursera HTML, CSS, and JS for Web Developers</a>
              </div>
            </div>    
        </div>
      </div>
        <hr>
           <!-- Project Five -->
      <div class="row">

        <div class="col-md-6">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/sql.jpg" alt="">
        </div>
        <div class="col-md-6">
          <h3 class="text-warning">SQL</h3>
          <p>SQL (Structured Query Language) is a domain-specific language used in programming and designed for managing data held in a relational database management system, or for stream processing in a relational data stream management system. </p>
               
            <div class="dropdown text-center">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SQL  Resources
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="https://www.udemy.com/php-mysql-tutorial/">Udemy SQL Beginner Tutorial</a>
                <a class="dropdown-item" href="https://www.udacity.com/course/sql-for-data-analysis--ud198">Udacity SQL for Data Analysis</a>
                <a class="dropdown-item" href="https://www.coursera.org/learn/intro-sql">Coursera Introduction to SQL</a>
                <a class="http://www.quickcode.co/free/course/learn/Introduction-to-SQL-and-MySQL-/1504">Quick Code Introduction to SQL</a>  
              </div>
            </div>    
        </div>
      </div>     
      <!-- /.row -->
    </div>  
        
      
      <div class="container">
      <div class="card" id="tutor">
          <img src="img/tutoring.jpg" class="card-img-top" alt="...">
          <div class="card-body">

            <h5 class="card-title">Flexible tutoring to ensure your success. </h5>
            <p class="card-text">EIT's student ambassadors offer free tutoring for many college lower-level classes for EIT majors. Click below to schedule a tutor if you need help with homework, a quiz, or an exam.</p>
              <ul class="list-group">
                  <li class="list-group-item"><h4>A student ambassador tutor will:</h4></li>
                <li class="list-group-item list-group-item-dark">review and clarify classroom instruction</li>
                  <li class="list-group-item list-group-item-dark">provide a student perspective on learning and classroom success</li>
                  <li class="list-group-item list-group-item-dark">personalize the learning process for you</li>
                  <li class="list-group-item list-group-item-dark">increase your self-confidence and motivation</li>
                  <li class="list-group-item list-group-item-dark">promote independence in learning</li>
              </ul><br>
              <a class="btn btn-primary" href="https://ualr.edu/eit/tutor/" role="button">CS tutor request</a>  
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
