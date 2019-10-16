#!/usr/bin/php
<?php
	$tab = implode(" ", $argv);
	$tab = preg_replace('/\s+/', ' ', $tab);
	$tab = trim($tab);
	$tab = explode(" ", $tab);
	$name = array_shift($tab);
	sort($tab);
	foreach ($tab as $elem) {
		echo $elem."\n";
	}
?>
