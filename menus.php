<?php
function make_menu($name, $list) {
    echo "<select name=\"$name\">";
    
    foreach ($list as $value => $display) {
        echo "<option value=\"$value\">$display</option>";
    }
    
    echo "</select>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Date Menu Example</title>
</head>
<body>

<h2>Select a Date</h2>

<form action="" method="post">

<?php
$months = array(
    1 => 'January', 2 => 'February', 3 => 'March',
    4 => 'April', 5 => 'May', 6 => 'June',
    7 => 'July', 8 => 'August', 9 => 'September',
    10 => 'October', 11 => 'November', 12 => 'December'
);

$days = range(1, 31);

$years = range(date('Y'), date('Y') - 100);

make_menu('month', $months);
make_menu('day', array_combine($days, $days));
make_menu('year', array_combine($years, $years));
?>

<br><br>
<input type="submit" value="Submit">

</form>

</body>
</html>
