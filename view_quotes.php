<?php

$file = 'quotes.txt';

if (file_exists($file)) {

    $quotes = file($file);

} else {
    $error = "The quotes file does not exist.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Quotes</title>
</head>
<body>

<h2>Saved Quotes</h2>

<?php

if (!empty($error)) {

    echo "<p>$error</p>";

} elseif (!empty($quotes)) {

    echo "<ul>";

    foreach ($quotes as $quote) {
        echo "<li>" . htmlspecialchars($quote) . "</li>";
    }

    echo "</ul>";

} else {

    echo "<p>No quotes found.</p>";
}

?>

</body>
</html>
