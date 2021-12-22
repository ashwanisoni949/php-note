<?php
//wap a program to find the sum of all the argument supplied from command line and average
print_r($argv);
    $sun=0;
    $avg=0;
    for($i=1;$i<$argc;$i++)
    {
        $sum=$sum+(int)$argv[$i];
        echo PHP_EOL;
    }
    printf("the sum =%d\n",$sum);
    $avg=$sum/($argc-1);
    printf("the average =%d\n",$avg);
?>