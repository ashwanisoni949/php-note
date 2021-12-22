<?php
$n1=$_REQUEST['n1'];
$n2=$_REQUEST['n2'];
echo "<h1>CALCULATOR</h1>";
echo "<BR>ADDITION OF TWO NUMBER $n1+$n2<br>",$n1+$n2;
echo "<BR>SUBSTRATION OF TWO NUMBER $n1-$n2<br>",$n1-$n2;
echo "<BR>MULTIPLE OF TWO NUMBER $n1*$n2<br>",$n1*$n2;
#echo "<BR>DIVISION OF TWO NUMBER $n1/$n2<br>",$n1/$n2;
printf("<BR>DIVISION OF TWO NUMBER $n1/$n2=%.2f<br>",$n1/$n2);
?>