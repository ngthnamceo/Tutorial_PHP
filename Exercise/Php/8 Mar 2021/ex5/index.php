<?php
<?php
	$powerNumber = 1900;
	$electricityBill1 = "Tiền điện trước khi tính thuế là: ";
	$electricityBill2 = "Tiền điện sau khi tính thuế là: ";
	$firstPrice = $powerNumber * 450;
	if ($powerNumber <= 100) {
		echo $electricityBill1.$firstPrice."<br>";
		echo $electricityBill2.($firstPrice+0.1*$firstPrice);
	}
	else if ($powerNumber > 100 && $powerNumber <= 200) {
		$secondPrice = ($powerNumber - 100)*600 + 100*450;
		echo $electricityBill1.$secondPrice."<br>";
		echo $electricityBill2.($secondPrice+0.1*$secondPrice);
	}
	else if ($powerNumber > 200 && $powerNumber <= 300) {
		$thirdPrice = 100*(450+600)+($powerNumber-200)*750;
		echo $electricityBill1.$thirdPrice ."<br>";
		echo $electricityBill2.($thirdPrice +0.1*$thirdPrice);
	}
	else if ($powerNumber > 300 && $powerNumber <= 500) {
		$fourthPrice = 100*(450+600+750)+($powerNumber-300)*900;
		echo $electricityBill1.$fourthPrice."<br>";
		echo $electricityBill2.($fourthPrice+0.1*$fourthPrice);
	}
	else if ($powerNumber > 500 && $powerNumber <= 1000) {
		$fifthPrice = 100*(450+600+750)+(200*900)+($powerNumber-500)*1000;
		echo $electricityBill1.$fifthPrice."<br>";
		echo $electricityBill2.($fifthPrice+0.1*$fifthPrice); 
	}
	else {
		$sixPrice = 100*(450+600+750)+(200*900+500*1000)+($powerNumber-1000)*1200;
		echo $electricityBill1.$sixPrice."<br>";
		echo $electricityBill2.($sixPrice+0.1*$sixPrice);
	}
?>
?>