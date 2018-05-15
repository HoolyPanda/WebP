<?php
$counter=0;
for ($i= 'a';$i<='c';$i++)
{
  if($_GET[$i]<0)
  {
    $counter++;
  }
}
echo "Ответ ".$counter;
?>
