<?php
include("header.html");
$conn = mysqli_connect("localhost","root","Logan","final_project_db");

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    mysqli_query($conn,"UPDATE contacts SET first_name='$first', last_name='$last' WHERE id=$id");
    echo "<h2>Record Updated</h2>";
    echo "<a href='menu.php'>Back to Menu</a>";
    exit();
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM contacts WHERE id=$id"));
    ?>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        First Name:<br>
        <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br><br>
        Last Name:<br>
        <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br><br>
        <input type="submit" name="update" value="Update Record">
    </form>
    <?php
    include("footer.html");
    exit();
}

// Show records with edit links
$result = mysqli_query($conn,"SELECT * FROM contacts");
echo "<h2>Select a Record to Edit</h2>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['id']." - ".$row['first_name']." ".$row['last_name'];
    echo " <a href='edit.php?id=".$row['id']."'>Edit</a><br>";
}

include("footer.html");
?>
