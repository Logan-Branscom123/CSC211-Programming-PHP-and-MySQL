<?php

$dbc = mysqli_connect('localhost', 'root', 'Logan', 'myblog');

if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    $query = "DELETE FROM entries WHERE entry_id = $id LIMIT 1";

    $result = mysqli_query($dbc, $query);

    if ($result && mysqli_affected_rows($dbc) == 1) {
        echo "<p><strong>Entry deleted successfully.</strong></p>";
    } else {
        echo "<p>Error deleting entry.</p>";
    }

} else {
    echo "<p>No entry selected.</p>";
}

echo '<p><a href="view_entries.php">Back to Entries</a></p>';

mysqli_close($dbc);

?>
