<!DOCTYPE html>
<html>
<head>
    <title>Event Results</title>
</head>
<body>

<h1>Registration Results</h1>

<?php

    $name = $_POST['name'];
    $events = $_POST['events'];

    print "<p>Name: $name</p>";

    if (!empty($events)) {

        print "<p>You registered for:</p>";
        print "<ul>";

        foreach ($events as $event) {
            print "<li>$event</li>";
        }

        print "</ul>";

    } else {

        print "<p>No events selected.</p>";

    }

?>

</body>
</html>
