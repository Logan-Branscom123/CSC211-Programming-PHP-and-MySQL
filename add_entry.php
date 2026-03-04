<?php

$dbc = mysqli_connect('localhost', 'root', 'Logan', 'myblog');

if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = mysqli_real_escape_string($dbc, trim($_POST['title']));
    $entry = mysqli_real_escape_string($dbc, trim($_POST['entry']));

    // Insert query
    $query = "INSERT INTO entries (title, entry, date_entered)
              VALUES ('$title', '$entry', NOW())";

    $result = mysqli_query($dbc, $query);

    if ($result) {
        echo "<p><strong>Entry added successfully!</strong></p>";
    } else {
        echo "<p>Error: " . mysqli_error($dbc) . "</p>";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Entry</title>
</head>
<body>

<h2>Add a New Entry</h2>

<form action="add_entry.php" method="post">
    <p>Title:<br>
    <input type="text" name="title" size="40"></p>

    <p>Entry:<br>
    <textarea name="entry" rows="5" cols="40"></textarea></p>

    <p><input type="submit" value="Add Entry"></p>
</form>

</body>
</html>
