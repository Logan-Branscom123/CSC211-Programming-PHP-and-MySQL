<?php
include("header.html");

$conn = mysqli_connect("localhost","root","Logan","final_project_db");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($conn,"DELETE FROM contacts WHERE id=$id");
    echo "<h2>Record Deleted</h2>";
    echo "<a href='delete.php'>Delete Another</a> | <a href='menu.php'>Back to Menu</a>";
    exit();
}

// Show all records with delete buttons
$result = mysqli_query($conn,"SELECT * FROM contacts");

echo "<h2>Select a Record to Delete</h2>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['id'] . " - " . $row['first_name'] . " " . $row['last_name'];
    echo " <a href='delete.php?id=".$row['id']."'>Delete</a><br>";
}

include("footer.html");
?>
