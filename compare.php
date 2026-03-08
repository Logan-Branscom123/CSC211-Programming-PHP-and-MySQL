<?php
include("header.html");

$conn = mysqli_connect("localhost","root","Logan","final_project_db");
$result = mysqli_query($conn,"SELECT * FROM contacts LIMIT 2"); // just 2 records
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(count($rows) < 2){
    echo "Not enough records to compare.";
} else {
    $first1 = substr($rows[0]['first_name'],0,3); // first 3 letters
    $first2 = substr($rows[1]['first_name'],0,3);
    echo "<h2>Substring Comparison of First Names</h2>";
    echo $rows[0]['first_name']." vs ".$rows[1]['first_name']."<br>";
    if($first1 === $first2){
        echo "The first 3 letters match!";
    } else {
        echo "The first 3 letters do NOT match.";
    }
}

echo "<br><a href='menu.php'>Back to Menu</a>";

include("footer.html");
?>
