<?php
function rekursif($kolom){
	global $i;
	rekursif2($i, $kolom);
	echo "<br>";
	if (--$kolom >$i){
		rekursif($kolom);
	}
}

function rekursif2($j, $kolom){
	global $i;
	if($j > $i - $kolom){
		echo "*";
		rekursif2($j - 1,$kolom);
	}
}
$nilai = $_GET["input"];
$i = 0;
rekursif($nilai);

for ($i=1;$i <= $nilai; $i++){
	if ($i % 2 ==0){
		$genap[]=$i;
	}else {
		$ganjil[]=$i;
	}
}
	foreach ($genap as $bil_genap){
		echo $bil_genap.',';
		
	}
	echo "<br>";
	foreach ($ganjil as $bil_ganjil){
		echo $bil_ganjil. ',';
		
	}
?>
