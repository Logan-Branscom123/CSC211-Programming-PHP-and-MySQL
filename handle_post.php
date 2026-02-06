<!DOCTYPE html>
<html>
<head>
    <title>Handle POST</title>
</head>
<body>

<h1>Form Results</h1>

<?php
	$first = $_POST['first_name'];
	$last  = $_POST['last_name'];

	$full_name = $first . " " . $last;

	echo "<p>Original Name: $full_name</p>";

	echo "<p>#1 strlen(): ";
	echo strlen($full_name);
	echo " characters</p>";

	echo "<p>#2 strtoupper(): ";
	echo strtoupper($full_name);
	echo "</p>";

	echo "<p>#3 strtolower(): ";
	echo strtolower($full_name);
	echo "</p>";

	echo "<p>#4 strpos(): ";
	echo "Last name starts at position ";
	echo strpos($full_name, $last);
	echo "</p>";

	echo "<p>#5 substr(): ";
	echo "First 5 characters: ";
	echo substr($full_name, 0, 5);
	echo "</p>";

	echo "<p>#6 str_replace(): ";
	echo str_replace($last, "Branscom", $full_name);
	echo "</p>";
?>

</body>
</html>
