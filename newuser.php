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
   <!-- NAVBAR -->
   <nav class="navbar navbar-light" id="mainNav">
      <div class="container">
          <a href="#page-top"class="navbar-brand js-scroll-trigger"><img src="img/navualr.png"> Register or Login</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fa fa-bars"></i></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href ="Home.html" class="nav-link js-scroll-trigger">Home Page</a></li>
              <li class="nav-item"><a href ="Scholarship.html" class="nav-link js-scroll-trigger">Scholarship Opportunities</a></li>
              <li class="nav-item"><a href ="Housing.html" class="nav-link js-scroll-trigger">Housing Information</a></li>
              <li class="nav-item"><a href ="Contact.html" class="nav-link js-scroll-trigger">Contact</a></li>
              <li class="nav-item"><a href ="Userhome.html" class="nav-link js-scroll-trigger">User Home Place Holder</a></li>
              </ul>
          </div><!-- END nabarResponsive -->
      </div><!-- END container -->
   </nav><!-- NAVBAR --> 
   
<body>
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
</body>