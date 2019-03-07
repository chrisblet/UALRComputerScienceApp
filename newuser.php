<?php
$username = $_POST["username"];
$password = $_POST["password"];
$userAlreadyExists = "";

if (!empty($username) && !empty($password))
{
    if (userExists($username))
    {
        $userAlreadyExists = "This username is already in use.";
    } else 
    {
        $insert = "INSERT INTO tblUsers (username, password)
        VALUES ('$username', '$password')";
                if ($mysqli->query($insert) == true)
        {
            setCookie("username", $_POST['username']);
            setCookie("password", $_POST['password']);
            header('Location: home.html');
        } else {
            /* echo '<pre>', var_dump($mysqli), '</pre>'; */
            $userAlreadyExists = "Username already exists.";
            die(mysqli_error);
        }
    }
}
?>

<body>
    <div class="logForm col-md-2 offset-md-5 text-center">
        <h1 class="h3 mb-3 font-weight-normal">Let's get started!</h1>
        <form action="newuser.php" method="post">
            <input type="text" name="username" class="form-control" placeholder="Username"></br>
            <?php if(!empty($userAlreadyExists)) { echo "<label class='error'>$userAlreadyExists</label>"; } ?>
            <input type="password" name="password" class="form-control" placeholder="Password"></br>
            <input type="submit" value="Create" class="buttons btn btn-lg btn-primary btn-block">
        </form>
    </div>
</body>