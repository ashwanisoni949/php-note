<?php
$n1=$_REQUEST['n1'];
$n2=$_REQUEST['n2'];
$rem=$n1/$n2;
$val=(int)$rem;
$m=$n1-$n2*$val;
echo "<h2>REMAINDER WITHOUT USE[%]</H2>";
echo "<BR>FIRST INPUTED VALUE<br>",$n1;
echo "<BR>SECOND INPUTED VALUE<br>",$n2;
#echo "<BR>DISPLAY REMAINDER<br>",$n1-($n1/$n2)*$n2;
echo "<BR>DISPLAY REMAINDER<br>",$m;
?>