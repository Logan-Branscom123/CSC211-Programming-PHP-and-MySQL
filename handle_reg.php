<?php
    error_reporting(0);
    ini_set('display_errors', 0);

    $first    = $_POST['first'];
    $last     = $_POST['last'];
    $email    = $_POST['email'];
    $username = $_POST['username'];

    if (empty($first)) {
        echo "First name is required.";
    }
    elseif (empty($last)) {
        echo "Last name is required.";
    }
    elseif (empty($email)) {
        echo "Email address is required.";
    }
    elseif (empty($username)) {
        echo "Username is required.";
    }
    else {
        echo "Registration successful!<br>";
        echo "Welcome, $first $last.<br>";
        echo "Your username is $username.";
    }
?>
