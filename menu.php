<?php
include("header.html"); 
?>

<h2>Database Options</h2>
<p>Select an option below:</p>

<form action="view.php" method="get">
<button type="submit">Display Database Records</button>
</form>
<br>

<form action="main_index.php" method="get">
<button type="submit">Add New Record</button>
</form>
<br>

<form action="delete.php" method="get">
<button type="submit">Delete a Record</button>
</form>
<br>

<form action="edit.php" method="get">
<button type="submit">Edit a Record</button>
</form>
<br>

<form action="files.php" method="get">
<button type="submit">Display Files in Directory</button>
</form>
<br>

<form action="compare.php" method="get">
<button type="submit">Compare Names (Substring)</button>
</form>

<?php
include("footer.html"); // footer included
?>
