<?php
//wap in php to show var to var reference
$x='10';//normal variable
echo $x;//normal variable
echo PHP_EOL;

$y='ravi';//string value
echo $y;
echo PHP_EOL;
$ravi=50;
echo $ravi;
echo PHP_EOL;
$z='chaman';
$$z=500;//$($z)=500
printf("the value of chaman =%s",$chaman);
echo PHP_EOL;
$w='_100';
$$w='king';
printf("the value of w =%s\n",$w);
printf("the value of king=%s\n",$$w);
printf("the value of _100 %s\n",$_100);
$exp='x';
echo $exp;
echo PHP_EOL;
echo gettype($exp);
echo $$exp;
echo PHP_EOL;
$student['name']='ashwnai';
$student['class']='diploma';
foreach($student as $key=>$value)
{
    $$key=$value;
    printf("%s:%s\n",$key,$value);
}
echo $name;
echo PHP_EOL;
echo $class;
echo 'without using variable to variable';
echo PHP_EOL;
$car['name']='BMW';
$car['class']='A class';
$car['price']='5.5 Lakhs';
extract($car);
printf("the name of car : %s\n",$name);
printf("the class of car : %s\n",$class);
printf("the price of car : %s\n",$price);

?>