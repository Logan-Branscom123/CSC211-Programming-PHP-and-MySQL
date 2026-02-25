<?php

$file = 'quotes.txt';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $quote = trim($_POST['quote']);

    if (!empty($quote)) {

        $quote .= "\n";

        file_put_contents($file, $quote, FILE_APPEND | LOCK_EX);

        $message = "Your quote has been added!";
    } else {
        $message = "Please enter a quote.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add a Quote</title>
</head>
<body>

<h2>Add a New Quote</h2>

<?php
if (!empty($message)) {
    echo "<p><strong>$message</strong></p>";
}
?>

<form action="add_quote.php" method="post">
<p>
Enter your quote:<br>
<textarea name="quote" rows="4" cols="50"></textarea>
</p>

<p>
<input type="submit" value="Add Quote">
</p>
</form>

</body>
</html>
