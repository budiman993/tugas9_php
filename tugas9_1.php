<?php

$a=0;
$b=1;
echo "$a $b";
for ($i=0; $i<20; $i++)
{
  $hasil = $b + $a;
  echo " $hasil";
  $a = $b;
  $b = $hasil;
}
?>