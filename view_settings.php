<?php
if(isset($_POST['submit'])){

    setcookie("font_size", $_POST['font_size'], time() + (86400 * 30));
    setcookie("font_color", $_POST['font_color'], time() + (86400 * 30));

    $font_size = $_POST['font_size'];
    $font_color = $_POST['font_color'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Settings Saved</title>
</head>
<body>

<h2>Your Preferences Have Been Saved</h2>

<p style="font-size: <?php echo $font_size; ?>; color: <?php echo $font_color; ?>;">
    This text reflects your saved font size and color preferences.
</p>

<br>

<a href="customize.php">Return to Customize Page</a>

</body>
</html>
