<?php

$dbc = mysqli_connect('localhost', 'root', 'Logan', 'myblog');

if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT title, entry, date_entered FROM entries ORDER BY date_entered DESC";

$result = mysqli_query($dbc, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Entries</title>
</head>
<body>

<h2>All Blog Entries</h2>

<?php

if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            echo "<h3>" . $row['title'] . "</h3>";
            echo "<p>" . $row['entry'] . "</p>";
            echo "<small>Posted on: " . $row['date_entered'] . "</small><hr>";

        }

    } else {
        echo "<p>No entries found.</p>";
    }

} else {
    echo "<p>Error: " . mysqli_error($dbc) . "</p>";
}

mysqli_close($dbc);

?>

</body>
</html>
