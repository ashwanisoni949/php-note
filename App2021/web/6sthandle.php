<?php
$n1=$_REQUEST['n1'];
$n2=$_REQUEST['n2'];
echo "<h1>DIPLAY AREA OF RECTANGL & PERIMETER</H1>";
echo "<BR>DISPLAY LENGTH<br>",$n1;
echo "<BR>DISPLAY WIDTH<br>",$n2;
echo "<BR>DISPLAY AREA OF RECTANGLE<br>",($n1*$n2)/2;
echo "<BR>DIPLAY RECTANGLE OF PERIMETER <br>",2*($n1+$n2);
?>