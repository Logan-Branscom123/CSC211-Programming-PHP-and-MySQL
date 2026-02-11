<!DOCTYPE html>
<html>
<head>
    <title>Registration Results</title>
</head>
<body>

<h1>Registration Results</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = false;  

    $first  = trim($_POST['first_name']);
    $last   = trim($_POST['last_name']);
    $email  = trim($_POST['email']);
    $gender = $_POST['gender'] ?? '';
    $color  = $_POST['color'] ?? '';
    $comments = trim($_POST['comments']);

    if (empty($first)) {
        echo "<p>Please enter your first name.</p>";
        $errors = true;
    }

    if (empty($last)) {
        echo "<p>Please enter your last name.</p>";
        $errors = true;
    }

    if (empty($email)) {
        echo "<p>Please enter your email address.</p>";
        $errors = true;
    }

    if ($gender == '') {
        echo "<p>Please select your gender.</p>";
        $errors = true;
    }

    if (!$errors) {

        echo "<h2>Thank you for registering!</h2>";

        echo "<p><strong>Name:</strong> $first $last</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Favorite Color:</strong> $color</p>";
        echo "<p><strong>Comments:</strong> $comments</p>";

    } else {

        echo "<p><strong>Please go back and correct the errors above.</strong></p>";

    }
}
?>

</body>
</html>
