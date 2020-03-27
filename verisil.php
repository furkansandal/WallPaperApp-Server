<?php
$resim = @$_GET['v'];
if($resim != ''){
	$db = new SQLite3('veriler.db');
	$db->exec("DELETE from duvar_kagitlari where id = $resim");
	echo "SILME BASARILI";
}else{
	echo "SILME BASARISIZ...";
}

?>