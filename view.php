<?php
include("header.html");

$conn = mysqli_connect("localhost","root","Logan","final_project_db");

$sql = "SELECT * FROM contacts";
$result = mysqli_query($conn,$sql);

echo "<h2>All Records</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>City</th></tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['first_name']."</td>";
    echo "<td>".$row['last_name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['city']."</td>";
    echo "</tr>";
}

echo "</table>";
echo "<br><a href='menu.php'>Back to Menu</a>";

include("footer.html");
?>
