<?php
$i = 1;
$tong = 0;
$number = null;
while($i<100){
    $tong +=$i;
    $i++;
}
while($i<50 and $i>20 ){
	$number %3 == 0;
}
echo $number. "<br/>";
echo $tong;
?>