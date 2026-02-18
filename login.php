<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email == "student@email.com" && $password == "password123") {

        header("Location: welcome.php");
        exit;

    } else {
        $error = "Invalid login credentials.";
    }
}

?>

<h2>Login</h2>

<?php
if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>

<form action="login.php" method="post">
    <p>Email: <input type="email" name="email"></p>
    <p>Password: <input type="password" name="password"></p>
    <p><input type="submit" value="Login"></p>
</form>


