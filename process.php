<?php

$host = "localhost";
$user = "root";
$password = "Logan";   
$database = "final_project_db";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$email = $_POST['email'];

if(
empty($first) ||
empty($last) ||
empty($address) ||
empty($city) ||
empty($state) ||
empty($phone) ||
empty($email)
){
    echo "<h2>Error: All fields must be filled out.</h2>";
    echo "<a href='main_index.php'>Go Back</a>";
    exit();
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<h2>Error: Invalid email format.</h2>";
    echo "<a href='main_index.php'>Go Back</a>";
    exit();
}

$first = ucfirst($first);
$last = ucfirst($last);

$fullname = $first . " " . $last;

$a = strlen($first);
$b = strlen($last);
$total = $a + $b;

$sql = "INSERT INTO contacts
(first_name,last_name,address,city,state,phone,email)
VALUES
('$first','$last','$address','$city','$state','$phone','$email')";

mysqli_query($conn,$sql);

include("header.html");

echo "<h2>Data Saved Successfully</h2>";
echo "Welcome $fullname<br>";
echo "Math Example (name length total): $total<br>";

echo "<br><a href='main_index.php'>Add Another Record</a>";
echo "<br><a href='view.php'>View Database</a>";

include("footer.html");

?>
