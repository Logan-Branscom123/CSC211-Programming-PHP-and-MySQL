<!DOCTYPE html>
<html>
<head>
    <title>Soups of the Week</title>
</head>
<body>

<h1>Soups of the Week</h1>

<?php

    $soups = array();

    $soups['Monday'] = 'Tomato Soup';
    $soups['Tuesday'] = 'Chicken Noodle Soup';
    $soups['Wednesday'] = 'Clam Chowder';
    $soups['Thursday'] = 'Beef Vegetable Soup';
    $soups['Friday'] = 'Minestrone';
    $soups['Saturday'] = 'Broccoli Cheddar Soup';
    $soups['Sunday'] = 'French Onion Soup';

    foreach ($soups as $day => $soup) {
        echo "<p>$day: $soup</p>";
    }

?>

</body>
</html>
