<?php 

header('Content-type: application/json');

$db = new SQLite3('veriler.db'); //SQLite veritabanına bağlantı


$jsonArray = array();
$sayac = 0;
$results = $db->query('SELECT * FROM duvar_kagitlari');
while ($row = $results->fetchArray()) {
    $jsonArray['data'][$sayac]['url'] = $row["url"];
    $sayac++;
}
echo json_encode($jsonArray);
?>