<?php
// Default values
$font_size = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : "16px";
$font_color = isset($_COOKIE['font_color']) ? $_COOKIE['font_color'] : "black";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customize Page</title>
</head>
<body>

<h2>Customize Your Settings</h2>

<p style="font-size: <?php echo $font_size; ?>; color: <?php echo $font_color; ?>;">
    This text reflects your saved font size and color preferences.
</p>

<br>

<form method="post" action="view_settings.php">

    <label>Choose Font Size:</label>
    <select name="font_size">
        <option value="14px">Small</option>
        <option value="18px">Medium</option>
        <option value="24px">Large</option>
    </select>

    <br><br>

    <label>Choose Font Color:</label>
    <select name="font_color">
        <option value="black">Black</option>
        <option value="blue">Blue</option>
        <option value="red">Red</option>
        <option value="green">Green</option>
    </select>

    <br><br>

    <input type="submit" name="submit" value="Save Preferences">
	<input type="submit" name="reset" value="Reset Settings">

</form>

</body>
</html>
