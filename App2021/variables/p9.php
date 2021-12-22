<?php

//wap in php to show difference b/w null and undefined
$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
printf("this memory X=%d",memory_get_usage($x));
unset($x);
printf("this memory X= %d",memory_get_usage($x));
echo PHP_EOL;
$y;//no memory
echo $y;
echo PHP_EOL;
var_dump($y);
var_dump(isset($y));
printf("this memory y =%d",memory_get_usage($x));
unset($y);
printf("this memory y = %d",memory_get_usage($x));
echo PHP_EOL;
echo 'info about z';
echo PHP_EOL;
$z=null;//memory
echo $z;
echo PHP_EOL;
var_dump($z);
var_dump(isset($z));
printf("this memory =%d",memory_get_usage($z));
unset($z);
printf("this memory = %d",memory_get_usage($z));
echo PHP_EOL;
?>
