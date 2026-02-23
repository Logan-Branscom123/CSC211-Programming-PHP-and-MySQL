<?php
function make_textbox($name, $value) {
    echo "<input type=\"text\" name=\"$name\" value=\"$value\">";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
} else {
    $username = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sticky Form Example</title>
</head>
<body>

<h2>Sticky Form Demonstration</h2>

<form action="sticky1.php" method="post">

<p>Enter your name:
<?php
make_textbox('username', $username);
?>
</p>

<p>
<input type="submit" value="Submit">
</p>

</form>

<?php
if (!empty($username)) {
    echo "<p>Hello, $username!</p>";
}
?>

</body>
</html>
