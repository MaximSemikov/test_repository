<?php
	echo "Hello world<br>";
	for($i=0;$i<10;$i++){
		echo "i=$i<br>";
	}
$array=[];
for($i=0;$i<10;$i++) {
	$array[]=$i;
}
echo '<pre>';
printr($array);
echo '</pre>';
