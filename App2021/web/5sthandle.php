<?php
$n1=$_REQUEST['n1'];
$n2=$_REQUEST['n2'];
$n3=$_REQUEST['n3'];
echo "<h1>TOTAL SI AMOUNT</H1>";
echo "<BR>PRINCIPLE AMOUNT<br>",$n1;
echo "<BR>RATE OF AMOUNT<br>",$n2;
echo "<BR>TIME OF AMOUNT<br>",$n3;
echo "<br>SI AMOUNT=",($n1*$n2*$n3)/100;
?>