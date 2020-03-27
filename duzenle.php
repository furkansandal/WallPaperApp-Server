<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<script type="text/javascript">
	
	function resimSil(x){

            if (x.length == 0) {
                
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(this.responseText);
                    }else{
                        alert(this.responseText);
                    }
                };
                xmlhttp.open("GET", "https://furkansandal.com/wallpaperapp/verisil.php?v=" + x, true);
                xmlhttp.send();
            }
	}

</script>

<h2>Duvar Kagitlari</h2>
<table>

	<tr>
    <th>Resim</th>
    <th>Silinsin mi?</th>
  </tr>
<?php

$db = new SQLite3('veriler.db'); //SQLite veritabanına bağlantı

$sayac = 0;

$results = $db->query('SELECT * FROM duvar_kagitlari');
while ($row = $results->fetchArray()) {
	$resim = $row["url"];
	$id = $row["id"];
	echo "
		<tr>
    <th><img src='$resim' height='96px' width='54px' /></th>
    <th><input type='button' value='sil' onclick='resimSil($id)' /></th>
  </tr>
	";
    
}


?>

</table>

</body>
</html>