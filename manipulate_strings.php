<?php
	$firstName = "Logan";
	$lastName  = "Branscom";

	$fullName = $firstName . " " . $lastName;

	echo "<h2>String Manipulation</h2>";

	echo "<p>strlen():</p>";
	echo "Full Name: $fullName<br>";
	echo "Number of characters: " . strlen($fullName) . "<br><br>";

	echo "<p>strpos():</p>";
	echo "Finding the position of the last name inside the full name.<br>";

	$position = strpos($fullName, $lastName);

	echo "The last name '$lastName' starts at position: $position<br><br>";

	echo "<p>str_replace():</p>";
	echo "Replacing the last name.<br>";

	$modifiedName = str_replace($lastName, "Smith", $fullName);

	echo "Original name: $fullName<br>";
	echo "Modified name: $modifiedName<br>";
?>
