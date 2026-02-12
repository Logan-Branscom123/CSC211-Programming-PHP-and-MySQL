<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
</head>
<body>

<h1>Book List</h1>

<?php

    $books = array(

        array(
            "title" => "The Great Gatsby",
            "author" => "F. Scott Fitzgerald",
            "year" => 1925,
            "price" => 10.99
        ),

        array(
            "title" => "To Kill a Mockingbird",
            "author" => "Harper Lee",
            "year" => 1960,
            "price" => 8.99
        ),

        array(
            "title" => "1984",
            "author" => "George Orwell",
            "year" => 1949,
            "price" => 9.99
        )

    );

    foreach ($books as $book) {

        echo "<p>";
        echo "<strong>Title:</strong> " . $book["title"] . "<br>";
        echo "<strong>Author:</strong> " . $book["author"] . "<br>";
        echo "<strong>Year:</strong> " . $book["year"] . "<br>";
        echo "<strong>Price:</strong> $" . $book["price"];
        echo "</p>";

    }

?>

</body>
</html>
