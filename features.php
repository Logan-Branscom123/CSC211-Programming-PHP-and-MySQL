<?php
include("header.html");

// ----------------------------
// 1. String modification examples
$str_ucfirst = isset($_POST['str_ucfirst']) ? $_POST['str_ucfirst'] : "hello world";
$str_strtoupper = isset($_POST['str_strtoupper']) ? $_POST['str_strtoupper'] : "php rocks";

// Apply string functions
$str_ucfirst_modified = ucfirst($str_ucfirst);    // ucfirst
$str_strtoupper_modified = strtoupper($str_strtoupper); // strtoupper

// ----------------------------
// 2. Concatenation example
$str_concat1 = "PHP";
$str_concat2 = "Fun";
$concat_result = $str_concat1 . " " . $str_concat2;

// ----------------------------
// 3. Math example — fully interactive
$num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 5;
$num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 7;
$math_result = $num1 * $num2;

// ----------------------------
// 4. Array example
$fruits = ["Apple","Banana","Cherry"];
$fruits_list = implode(", ", $fruits);

// ----------------------------
// 5. Function example
function greetAnimal($animal){
    return "Hello, " . $animal . "! Nice to meet you.";
}
$animal = "Dog";
$greeting = greetAnimal($animal);
?>

<div style="margin-left:20px; margin-top:20px;">



    <h2>PHP Coding Features Demonstration (Interactive)</h2>

    <form action="features.php" method="post">

        <!-- String modification -->
        <label>ucfirst Example:</label><br>
        <input type="text" name="str_ucfirst" value="<?php echo $str_ucfirst_modified; ?>"><br><br>

        <label>strtoupper Example:</label><br>
        <input type="text" name="str_strtoupper" value="<?php echo $str_strtoupper_modified; ?>"><br><br>

        <!-- Math — fully interactive -->
        <label>Math Example (Multiply Two Numbers):</label><br>
        <input type="number" step="any" name="num1" value="<?php echo $num1; ?>"> *
        <input type="number" step="any" name="num2" value="<?php echo $num2; ?>"> =
        <input type="text" value="<?php echo $math_result; ?>" readonly><br><br>

        <input type="submit" value="Update Examples">
    </form>

    <br>

    <!-- Display examples as plain text -->
    <p><strong>Concatenation Example:</strong> <?php echo $concat_result; ?></p>
    <p><strong>Array Example (fruits):</strong> <?php echo $fruits_list; ?></p>
    <p><strong>Function Example (greetAnimal):</strong> <?php echo $greeting; ?></p>

    <br>
    <!-- Back button -->
    <a href="menu.php"><button>Back to Main Page</button></a>

</div>

<?php
include("footer.html");
?>
