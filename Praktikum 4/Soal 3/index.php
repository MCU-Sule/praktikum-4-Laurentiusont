<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Laurentius Gusti Ontoseno Panata Yudha-2172028">
    <title>Soal 3</title>
</head>
<body>
        <form method="GET">
        Create A Chess Board <br><br>
        Ukuran Board : <input type= "text" name="ukuran"> <input type="submit" value="Buat Board">
        </form>
</body>
</html>
<br><br>
<table border="1" width="350" height="350">
<?php

$baris = $_GET['ukuran'];
$kolom = $_GET['ukuran'];
$awal = 1;

for($i=0;$i<$baris;$i++){
 echo "<tr>";
 $hitam=$awal;
 for($j=0;$j<$kolom;$j++){
  echo "<td class='hitam$hitam'></td>";
  if($hitam==0)
  $hitam=1;
  else
  $hitam=0;
  }
 echo "</tr>";
 if($awal==0)
 $awal=1;
 else
 $awal=0;
 }
?>
</table>
<style type="text/css">
.hitam1{background-color:black;}
</style>
