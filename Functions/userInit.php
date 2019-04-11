<?php
include 'connect.php';
# this function is used to authenticate users.
# Pass the username and password. Returns true if the user authentication passes and false if it fails.
function authenticate($username, $pwd) {
    global $mysqli;
    return userExists($username) && passwordMatch($username, $pwd);
}

function userExists($username) {
    global $mysqli;
    $result = $mysqli->query("SELECT count('username') as 'numUsers' FROM users WHERE username = '$username'");
    $row = $result->fetch_object();
    return ($row->numUsers) ? true : false;
}

function passwordMatch($username, $pwd) {
    global $mysqli;
    $result = $mysqli->query("SELECT password FROM users WHERE username = '$username'");
    $queryPwd = $result->fetch_object();
    if ($pwd == $queryPwd->password) {
        return true;
    } else return false;
}

function changeUsername($oldusername, $newusername, $pwd) {
    global $mysqli;
    $changequery = $mysqli->query("UPDATE users set username = '$newusername'
    WHERE username = '$oldusername' AND password = '$pwd'");
    if ($mysqli->query($changequery) === true) {
        return true;
    } else {
        return false;
    }
}
?>