<?php
$maSanPham = "EV2009";
$tenSanPham = "Tấm hợp kim nhôm ngoài trời EV2009";
$vat = 0.05;
$soLuong = 500;
$gia = 160000;
$tongTienChuaThue = 500 * 160000;
$tongTienCaThue = 500 * 16000 * $vat;
echo  $maSanPham."<br/>";
echo $tenSanPham."<br/>";
echo  "Giá chưa thuế:"."\n";
echo $tongTienChuaThue."<br/>";
echo "Giá bao gồm thuế:"."\n";
echo $tongTienCaThue;
?>