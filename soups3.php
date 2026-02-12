<!DOCTYPE html>
<html>
<head>
    <title>Soup Menu</title>
</head>
<body>

<h1>Soup of the Day</h1>

<?php

    $soups = array(
        'Tomato Soup',
        'Chicken Noodle Soup',
        'Clam Chowder',
        'Beef Vegetable Soup',
        'Minestrone',
        'Broccoli Cheddar Soup',
        'French Onion Soup'
    );

	print "<p>The first item is: " . $soups[0] . "</p>";

    foreach ($soups as $day => $soup) {
        print "<p>$day: $soup</p>";
    }
	
	
?>

</body>
</html>
