<?php

$dbc = mysqli_connect('localhost', 'root', 'Logan', 'myblog');

if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $title = mysqli_real_escape_string($dbc, trim($_POST['title']));
        $entry = mysqli_real_escape_string($dbc, trim($_POST['entry']));

        $query = "UPDATE entries 
                  SET title='$title', entry='$entry' 
                  WHERE entry_id=$id LIMIT 1";

        $result = mysqli_query($dbc, $query);

        if ($result && mysqli_affected_rows($dbc) == 1) {
            echo "<p><strong>Entry updated successfully.</strong></p>";
        } else {
            echo "<p>No changes made or error occurred.</p>";
        }

        echo '<p><a href="view_entries.php">Back to Entries</a></p>';

    } else {

        $query = "SELECT title, entry FROM entries WHERE entry_id=$id";

        $result = mysqli_query($dbc, $query);

        if ($result && mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            ?>

            <h2>Edit Entry</h2>
            <form action="edit_entry.php?id=<?php echo $id; ?>" method="post">
                <p>Title:<br>
                <input type="text" name="title" value="<?php echo $row['title']; ?>" size="40"></p>

                <p>Entry:<br>
                <textarea name="entry" rows="5" cols="40"><?php echo $row['entry']; ?></textarea></p>

                <p><input type="submit" value="Update Entry"></p>
            </form>

            <?php

        } else {
            echo "<p>Entry not found.</p>";
        }

    }

} else {
    echo "<p>No entry selected.</p>";
}

mysqli_close($dbc);

?>
