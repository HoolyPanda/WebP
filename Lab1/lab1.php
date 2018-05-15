<?php
$x1 = $_GET["x1"];
$y1 = $_GET["y1"];
$x2 = $_GET["x2"];
$y2 = $_GET["y2"];
$l= pow(abs($x1-$x2),2);
$h= pow(abs($y1-$y2),2);
echo "Ответ ".sqrt($l+$h);
?>
