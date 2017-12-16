<?php

$test = "kadai2.txt";

$hairetsu = file($test);

foreach ($hairetsu as $kekka) {
	print $kekka."<br />";
}

?>