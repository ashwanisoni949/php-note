<?php 
//wap in php to boolean data types stored in variablesw
$x=true;
echo $x;
echo PHP_EOL;
echo gettype($x);//boolean
echo PHP_EOL;
var_dump($x); //bool(true)

echo PHP_EOL;
$z=TRUE;
echo $z;
echo PHP_EOL;
echo gettype($z);
echo PHP_EOL;
var_dump($z);

echo PHP_EOL;
$y=TRUe;
echo $y;
echo PHP_EOL;
echo gettype($y);
echo PHP_EOL;
var_dump($y);

echo PHP_EOL;
$z=TrUE;
echo $z;
echo PHP_EOL;
echo gettype($z);
echo PHP_EOL;
var_dump($z);

echo PHP_EOL;
echo 'on comparing all the three values';
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;
echo (1==TRUE);
echo PHP_EOL;
echo (1==true);
echo PHP_EOL;
var_dump(1===true)
?>