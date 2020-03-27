<?php
$resim = @$_GET['v'];
if($resim != ''){
	$db = new SQLite3('veriler.db');
	$db->exec("INSERT INTO duvar_kagitlari (url) VALUES ('$resim')");
	echo "BASARILI";
}else{
	echo "BASARISIZ...";
}

?>