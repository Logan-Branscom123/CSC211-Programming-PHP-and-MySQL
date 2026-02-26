<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_FILES['the_file']) && $_FILES['the_file']['error'] == 0) {

        $upload_dir = 'uploads/';
        $filename = basename($_FILES['the_file']['name']);
        $target_file = $upload_dir . $filename;

        if (move_uploaded_file($_FILES['the_file']['tmp_name'], $target_file)) {
            $message = "File uploaded successfully!";
        } else {
            $message = "Error moving the file.";
        }

    } else {
        $message = "No file uploaded or upload error.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload a File</title>
</head>
<body>

<h2>Upload a File</h2>

<?php
if (!empty($message)) {
    echo "<p><strong>$message</strong></p>";
}
?>

<form action="upload_file.php" method="post" enctype="multipart/form-data">

<p>
Select a file:<br>
<input type="file" name="the_file">
</p>

<p>
<input type="submit" value="Upload File">
</p>

</form>

</body>
</html>
