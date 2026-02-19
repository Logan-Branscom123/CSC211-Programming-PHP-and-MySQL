<?php
// Delete cookies by setting expiration in the past
setcookie("font_size", "", time() - 3600);
setcookie("font_color", "", time() - 3600);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Settings</title>
</head>
<body>

<h2>Your Settings Have Been Reset</h2>

<p>Your font preferences have been cleared.</p>

<br>

<a href="view_settings.php">Go Back to View Settings</a>

</body>
</html>
