<?php

    $price = 19.95;
    $quantity = 6;
    $tax = 0.086;
    $discount = 5.00;

    echo "<h2>Operator Demonstration</h2>";

    $subtotal = $price * $quantity;
    $tax_amount = $subtotal * $tax;
    $total = $subtotal + $tax_amount - $discount;

    echo "<h3>Arithmetic Operators</h3>";
    echo "Subtotal: $" . number_format($subtotal, 2) . "<br>";
    echo "Tax Amount: $" . number_format($tax_amount, 2) . "<br>";
    echo "Total: $" . number_format($total, 2) . "<br>";

    echo "<h3>Comparison Operators</h3>";

    if ($total > 100) {
        echo "Total is greater than $100<br>";
    } else {
        echo "Total is not greater than $100<br>";
    }

    echo "<h3>Logical Operators</h3>";

    if ($price > 0 && $quantity > 0) {
        echo "Valid price and quantity<br>";
    }

    echo "<h3>Assignment Operators</h3>";

    $adjusted_total = $total;
    $adjusted_total += 10;

    echo "Adjusted Total after adding $10: $" . number_format($adjusted_total, 2);

?>
