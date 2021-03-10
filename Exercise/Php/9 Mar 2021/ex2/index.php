<?php
$array = [1, 12, 23, 35, 345, 678, 112, 67, 77, 16];
 
$max = null;
$min = null;
$avg = null;
 
for ($i = 0; $i < count($array); $i++)
{
    if ($max == null){
        $max = $array[$i];
        
    }
    else {
        if ($array[$i] > $max){
            $max = $array[$i];
            
        }
    }
}
for ($i = 0; $i < count($array); $i++)
{
    if ($min == null){
        $min = $array[$i];
        
    }
    else {
        if ($array[$i] < $min){
            $min = $array[$i];
            
        }
    }
}
 
echo "Giá trị lớn nhất là $max". "<br/>";
echo "Giá trị nhỏ nhất là $min";
?>