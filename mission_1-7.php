<?php

$test = "kadai5.txt";

$hairetsu = file($test);

foreach ($hairetsu as $kekka) {
	print $kekka."<br />";
}

?>