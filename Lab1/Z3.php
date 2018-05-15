<?php
$n = $_GET["n"];
$lastnum= $n % 10;
$firstnum= $n;
$i= 0;
while($n / 10 >=1)
{
  $n = $n / 10;
  $i++;
}
$n= $n % (10*$i);
echo "ОТвет ".($lastnum+($n));
 ?>
