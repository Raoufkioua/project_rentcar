<?php
require './Connexion.php';
session_start();
$mysqli = Connexion::connect();


$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("select * from users where email = '$email'");

var_dump($result);
if ($result->num_row == 0) {
    //user not found
    $_SESSION['message'] = "User Doesn't exist ! ";
    
} else {

    $user = $result->fetch_assoc();
    // put this obejt to associate array 

    if (password_verify($_POST['password'], $user['password'])) {


        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        // this how we know that hesigned in 
        $_SESSION['logged_in'] = true;
    }
    else{
    $_SESSION['message'] = " Wrong password ! ";
}
}
