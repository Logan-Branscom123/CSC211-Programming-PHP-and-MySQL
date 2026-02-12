<!DOCTYPE html>
<html>
<head>
    <title>Soups of the Week</title>
</head>
<body>

<h1>Soups of the Week</h1>

<?php
$soups = array(
    "Monday" => "Tomato Soup",
    "Tuesday" => "Chicken Noodle Soup",
    "Wednesday" => "Clam Chowder",
    "Thursday" => "Beef Vegetable Soup",
    "Friday" => "Minestrone",
    "Saturday" => "Broccoli Cheddar Soup",
    "Sunday" => "French Onion Soup"
);

foreach ($soups as $day => $soup) {
    echo "<p>$day: $soup</p>";
}
?>

</body>
</html>
