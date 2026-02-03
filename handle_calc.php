<?php

	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$tax = $_POST['tax'];
	$discount = $_POST['discount'];

	$subtotal = $price * $quantity;
	$tax_amount = $subtotal * $tax;
	$total = $subtotal + $tax_amount - $discount;

	echo "<h2>Calculation Results</h2>";

	echo "Price: $$price <br>";
	echo "Quantity: $quantity <br>";
	echo "Subtotal: $" . number_format($subtotal, 2) . "<br>";
	echo "Tax (8.6%): $" . number_format($tax_amount, 2) . "<br>";
	echo "Discount: $$discount <br><br>";

	echo "<strong>Total: $" . number_format($total, 2) . "</strong>";

?>
