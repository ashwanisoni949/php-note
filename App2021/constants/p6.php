<?php
error_reporting(E_USER_DEPRECATED);
//wap in php to make non-case sensitive user-define constants
define('gravity',10,1);
#define('gravity',10,true);
echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GrAviTy;

?>          