<?php
//wap in php to show boolean false stored in variable 
$x=false;
echo $x;//nothing
echo PHP_EOL;
echo gettype($x);//boolean
echo PHP_EOL;
var_dump($x);
echo PHP_EOL;
echo json_encode($x);//raw format

echo 'on comparing the values';
echo (false==False);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
var_dump(0==FALSE);//type is optioin match
echo PHP_EOL;
var_dump(0==(int)false);//implicit type conversion //php dynamic
echo PHP_EOL;
var_dump(0===false);
//content match and type match =false

printf("%s","ashwani");
echo PHP_EOL;
printf("%d",10);
echo PHP_EOL;
printf("%b",true);//b that means binary
echo PHP_EOL;
printf("the value of true in int :%d",true);
echo PHP_EOL;
printf("the value of true as as string %s",true);
echo PHP_EOL;
printf("the value of 1 as a string %s",1);
echo PHP_EOL;
printf("the value of 0 as a string %s",0);
echo PHP_EOL;
printf("the value of bool false as string %s",json_encode(false));
echo PHP_EOL;
printf("the value of string as empty as string string %s",'');
echo PHP_EOL;
printf("the value of bool false as string: %s",false);
echo PHP_EOL;
printf("the value of bool false as bool %b",false);
echo PHP_EOL;
printf("the value of bool false as bool %d",false);
echo PHP_EOL;




?>