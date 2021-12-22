<?php
//wap in php to show,floating point numbers
#$x=0010;//0 starting me aane octal me aa jata hai
$x=011;
echo $x;
echo PHP_EOL;
#$a=08;//invalid  numerical literal
//(conversion to octal range not possible)
#echo $a;
$b=10.5;
echo $b;
echo PHP_EOL;
echo gettype($b);//floating pint number
echo PHP_EOL;
var_dump($b);//floating pint number
echo PHP_EOL;
$c=10.0;
echo $c;
echo PHP_EOL;
$d=10.0000;
echo $d;
echo PHP_EOL;
echo gettype($d);//double
echo PHP_EOL;
var_dump($d);//float

echo PHP_EOL;
$d=(int)$c;//type cast in integer
echo $d;
echo PHP_EOL;
echo gettype($d);

echo PHP_EOL;
$z=0.5;
echo $z;
echo gettype($z);
echo PHP_EOL;
var_dump($z);
echo PHP_EOL;
$w=.5; //$w.=5
echo $w;
echo PHP_EOL;
echo gettype($w);
echo PHP_EOL;
var_dump($w);

echo PHP_EOL;
$p='a';
$p.=$w; //concodinate
echo $p;
echo PHP_EOL;
echo gettype($p);

echo PHP_EOL;
$marks=9.99999999999999;//min16bytes
echo $marks;
echo PHP_EOL;
echo gettype($marks);
echo PHP_EOL;
var_dump($marks);

echo PHP_EOL;
$marks=9.9999999999;
echo $marks;
echo PHP_EOL;
echo gettype($marks);
echo PHP_EOL;
var_dump($marks);

echo PHP_EOL;
$marks=9.5555555555555;
echo $marks;
echo PHP_EOL;
echo gettype($marks);
echo PHP_EOL;
var_dump($marks);
echo PHP_EOL;
$marks=9.5555555555545;
echo $marks;
echo PHP_EOL;
echo gettype($marks);
echo PHP_EOL;
var_dump($marks);
echo PHP_EOL;
$marks=9.999999999999999;
echo $marks;
echo PHP_EOL;
echo gettype($marks);
echo PHP_EOL;
var_dump($marks);
echo PHP_EOL;
printf("%lf",$marks);

echo PHP_EOL;
#$m=9.999999;//within the range
#$m=9.939999;
$m=9.929999;
echo $m;
echo PHP_EOL;
echo gettype($m);
echo PHP_EOL;
var_dump($m);
echo PHP_EOL;
printf("%.2f",$m);

?>