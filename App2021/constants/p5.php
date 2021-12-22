<?php
//wap in php to show re-declaration error in contants
define('gravity',10);
echo gravity;
echo PHP_EOL;
//echo GRAVITY;//undefined constants GRAVITY
define('GRAVITY',9.8);
echo GRAVITY;
echo PHP_EOL;
printf("the value of predefined constant true : %d\n",TRUE);
define('TRUE','yes');
printf("this value of predefined constant true :%d\n",TRUE);//E_NOTICE
printf("the value of user-defined constant gravity :%d\n",gravity);//E_USER_NOTICE
define('gravity',9.8);
printf("the value of user-defined constant gravity :%d\n",gravity);
 
?>