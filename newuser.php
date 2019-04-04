<?php
include 'Functions/userInit.php';
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
// note that order of fields on page is different than order on table on database. sorry
if (!empty($username) && !empty($password) && !empty($email))
{
    if (userExists($username))
    {
        $userAlreadyExists = "This username is already in use.";
    }  else
    {
        $insert = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";
        if ($mysqli->query($insert) == true)
        {
            echo "<script> alert('user creation successful.')</script>";
            setCookie("username", $_POST['username']);
            setCookie("password", $_POST['password']);
            header('Location: Home.html');
        } else {
            $userAlreadyExists = "This username is already in use.";
            die(mysqli_error);
        }
    }
} else if (!empty($_POST)) {
    echo "<script> alert('Unsuccessful registration')</script>";
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
    
    <title>UALR-Housing Information</title>
  </head>

<body>
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
   

    <div class="logForm col-md-2 offset-md-5 text-center">
        <h1 class="h3 mb-3 font-weight-normal">Register User</h1>
        <form action="newuser.php" method="post">
            <input type="text" name="email" class="form-control" placeholder="Email"></br>
            <?php if(!empty($emailAlreadyUser)) { echo "<label class='error'>$emailAlreadyUser</label><br>"; } ?>
            <input type="text" name="username" class="form-control" placeholder="Username"></br>
            <input type="password" name="password" class="form-control" placeholder="Password"></br>
            <?php if(!empty($userAlreadyExists)) { echo "<label class='error'>$userAlreadyExists</label>"; } ?> </br>
            <input type="submit" value="Create" class="buttons btn btn-lg btn-primary btn-block">
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>