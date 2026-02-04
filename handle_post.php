<!DOCTYPE html>
<html>
<head>
    <title>Handle POST</title>
</head>
<body>

    <h1>Form Results</h1>

    <?php
        $first = $_POST['first_name'];
        $last  = $_POST['last_name'];

        $full_name = $first . ' ' . $last;

        echo "<p>Hello, $full_name!</p>";
    ?>

</body>
</html>
