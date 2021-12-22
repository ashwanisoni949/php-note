<?php
$n1=$_REQUEST['n1'];
$n2=$_REQUEST['n2'];
echo "<h1>SUM OF ALL WITHOUT USE '+'</H1>";
echo "<BR>FIRST INPUTED VALUE<br>",$n1;
echo "<BR>SECOND INPUTED VALUE<br>",$n2;
echo "<BR>DISPLAY SUM OF NUMBER<br>",$n1-(-$n2);#bodmas
?>