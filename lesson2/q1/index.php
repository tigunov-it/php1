<?php
$a = -10000000034234230;
$b = 98401298402382;

function msg($a, $b) {
  if ($a >= 0 AND $b >= 0)
      echo "а и б положительные";
  else if ($a < 0 AND $b < 0)
      echo "а и б отрицательные";
  else
      echo "а и б разных знаков";
};

msg($a, $b);
