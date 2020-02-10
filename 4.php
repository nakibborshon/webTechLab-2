<?php 
	$num1=15;
	$num2=26;
	$num3=47;

	if ($num1>$num2) {
		if ($num1>$num3) {
			echo "The number:".$num1." is the largest.";
		}
		else {
			echo "The number:".$num3." is the largest.";
		}
	}
	else {
		if ($num2>$num3) {
			echo "The number:".$num2." is the largest.";
		}
		else {
			echo "The number:".$num3." is the largest.";
		}
	}
?>
