<!DOCTYPE html>
<html>
<head>
    <title>Registration Results</title>
</head>
<body>

<h1>Registration Results</h1>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $first  = trim($_POST['first_name']);
        $last   = trim($_POST['last_name']);
        $email  = trim($_POST['email']);
        $gender = $_POST['gender'] ?? '';
        $color  = $_POST['color'] ?? '';
        $comments = trim($_POST['comments']);

        if (empty($first) || empty($last) || empty($email)) {

            echo "<p><strong>Error:</strong> Please fill out all required fields.</p>";

        } else {

            echo "<p>Thank you for registering!</p>";
            echo "<p>Name: $first $last</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Gender: $gender</p>";
            echo "<p>Favorite Color: $color</p>";
            echo "<p>Comments:<br>$comments</p>";
        }
    }
?>

</body>
</html>
