#!/usr/bin/php
<?php

if ($argc > 1) {
	$argv[1] = trim($argv[1]);
	$argv[1] = preg_replace('/\s+/', ' ', $argv[1]);
	$tab = explode(" ", $argv[1]);
	$first = array_shift($tab);
	$tab = implode(" ", $tab);
	if (!empty($tab))
		echo $tab." ";
	echo $first."\n";
}

?>