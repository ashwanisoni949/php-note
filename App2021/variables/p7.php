<?php
//wap in php to nullable and empty
$x='';
var_dump($x);
PHP_EOL;
var_dump($x=='');
PHP_EOL;
var_dump($x=="");
PHP_EOL;
var_dump($x==="");
PHP_EOL;
var_dump($x==='');
PHP_EOL;
var_dump(empty($x));
PHP_EOL;
var_dump(empty(''));
PHP_EOL;
var_dump(empty(""));
PHP_EOL;
$y="";
var_dump($y);
PHP_EOL;
var_dump($x==$y);
PHP_EOL;
var_dump($x===$y);
echo PHP_EOL;
echo 'be aware b/w empty and "<space>"';
echo PHP_EOL;
printf("the value from empty:",'');
echo PHP_EOL;
var_dump(''==' ');
echo PHP_EOL;
var_dump(''===' ');
echo PHP_EOL;
echo '';
echo PHP_EOL;
echo gettype(' ');
echo PHP_EOL;
echo strlen(' ');
echo PHP_EOL;
echo ord('');//ascii
echo PHP_EOL;
echo ord('a'); //ascii
?>