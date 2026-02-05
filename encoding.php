<!DOCTYPE html>
<html>
<head>
    <title>URL Encoding Results</title>
</head>
<body>

    <h1>URL Encoding Results</h1>

    <?php
        $message = $_GET['message'];

        $encoded_message = urlencode($message);
        $decoded_message = urldecode($encoded_message);

        
        echo "<p><strong>URL Encoded Message:</strong><br>$encoded_message</p>";
        echo "<p><strong>URL Decoded Message:</strong><br>$decoded_message</p>";
    ?>

</body>
</html>
