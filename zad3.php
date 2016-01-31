<?php
header('Content-Type: text/html; charset=utf-8');
$a=7 ;
$b=20 ;
$y=10 ;
$h=30 ;
echo "Обиколката на трапец със страни: а = $a, b = $b и бедра y = $y е  " ;
echo $a + $b + 2*$y . 'сm .'. '<br/>';
echo "Лицето на трапец със страни: a = $a, b = $b и височина h = $h e   ";
echo (($a + $b) * $h) / 2 .'сm .'. '<br/>';
?>