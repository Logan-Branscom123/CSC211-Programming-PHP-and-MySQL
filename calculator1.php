<?php
function calculate($num1, $num2, $operator) {

    if ($operator == '+') {
        return $num1 + $num2;
    } elseif ($operator == '-') {
        return $num1 - $num2;
    } elseif ($operator == '*') {
        return $num1 * $num2;
    } elseif ($operator == '/') {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Cannot divide by zero";
        }
    }

    return NULL; 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator Using Return</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form action="calculator1.php" method="post">

<p>First Number:
<input type="number" name="num1" required>
</p>

<p>Second Number:
<input type="number" name="num2" required>
</p>

<p>Operator:
<select name="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>
</p>

<p>
<input type="submit" value="Calculate">
</p>

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $result = calculate($num1, $num2, $operator);

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
