<?php

 $i = 2;
 while ($i <= 20) {
	echo $i;
	$i+=5;
	echo "\n";
 }

 /*Sintaxe alternativa*/
 $i = 2;
 while ($i <= 20):
	echo $i;
	$i+=8;
	echo "\n";
 endwhile;

 