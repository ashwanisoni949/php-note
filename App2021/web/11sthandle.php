<?php
$n1=$_REQUEST['n1'];
$n2=$_REQUEST['n2'];
$n3=$_REQUEST['n3'];
$n4=$_REQUEST['n4'];
$n5=$_REQUEST['n5'];
echo "<h1>STUDENT MARKS OF %</H1>";
echo "<BR>FIRST INPUTED VALUE<br>",$n1;
echo "<BR>SECOND INPUTED VALUE<br>",$n2;
echo "<BR>THIRD INPUTED VALUE<br>",$n3;
echo "<BR>FOURTH INPUTED VALUE<br>",$n4;
echo "<BR>FIFTH INPUTED VALUE<br>",$n5;
echo "<BR>SUM OF TOTAL MASKS<br>",$n1+$n2+$n3+$n4+$n5;
echo "<BR>PERCENTAGE OF STUDENT MARKS<br>",($n1+$n2+$n3+$n4+$n5)*100/500,"%";
?>