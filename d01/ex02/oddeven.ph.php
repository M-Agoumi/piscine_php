#!/usr/bin/php
<?php
	while (1)
	{
		echo "Enter a number: ";
		$str = fgets(STDIN);
		if (empty($str)) {
			echo "\n";
			break;
		}
		$str = substr($str, 0, -1);
		if (is_numeric($str) && $str % 2 == 0) {
			$str = trim($str);
			echo "The number $str is even\n";
		}
		else if (is_numeric($str) && $str % 2 == 1) {
			$str = trim($str);
			echo "The number $str is odd\n";
		}
		else
			echo "'$str' is not a number\n";
	}
?>