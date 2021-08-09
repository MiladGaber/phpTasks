<!DOCTYPE html>

<head>
	<title>PHP - Day2 Task calc bill</title>
</head>

<?php

function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_thired = 6.50;

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 150) {
        $bill = $units * $unit_cost_second;
    }
    else {
        $bill = $units * $unit_cost_thired;
    }
    return $bill;
}

?>

<body>

		<div>
		    <?php
            $qty = 155; // 155*6.5 =  1007.5
            echo '<h1> Quantity of ' . $qty . ' = '   .calculate_bill($qty). ' LE </h1>' ?>
		</div>
        
</body>
</html>