<?php
//wap a program in php to add number using user-defined function
$no1=readline('enter the first no1');
$no2=readline('enter the second no2');
echo add($no1,$no2);
#echo add($no1);
#function add($no1=0,$no2=0)
function add($no1=0,$no2=0)
{
    return $no1+$no2;
}
printf("\nthe result with 0 argument=%d\n",add());
printf("thie result wit 1 argument=%d \n",add($no1));
printf("thie result wit 1 argument=%d \n",add($no2));
printf("thie result wit 2 argument=%d \n",add($no1,$no2));

?>