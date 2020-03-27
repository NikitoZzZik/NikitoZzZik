<?php

// 5
prnt('#5 ----------------------------------- ');
$s1 = 'VASHE IMA';
$s2 = 'ваши увлечения';
prnt(strlen ($s1)); //1
prnt(str_replace(' ', "&nbsp&nbsp", $s2)); //2
prnt(str_replace('IMA', 'NIKITOZZZZZZ', $s1)); //3


// 6
prnt('#6 ----------------------------------- ' . formula(3));
function formula($t) {
  return (-$t + sqrt(7 + $t)) / (8 - abs($t));
}

 ?>
