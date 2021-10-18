<?php

$angka2 = "$_GET[angka2]";
$angka1 = "$_GET[angka1]";
$opt = "$_GET[opt]";
$hasil;


if ($opt == "+")
{
    $hasil = $angka1 + $angka2;
}
elseif ($opt == "-")
{
    $hasil = $angka1 - $angka2;
}
elseif ($opt == "*")
{
    $hasil = $angka1 * $angka2;
}
elseif ($opt == "/")
{
    $hasil = $angka1 / $angka2;
}

echo ("
<table align=center border=1 width=300px>
<tr bgcolor=#bbdc58>
    <td colspan=2 align=center>
    Kalkulator
    </td>
</tr>
<tr>
    <td align=left bgcolor=#6ab04c width=100px>Angka Pertama</td>
    <td align=center>$_GET[angka1]</td>
</tr>
<tr>
    <td align=left bgcolor=#6ab04c width=100px>Angka Kedua</td>
    <td align=center>$_GET[angka2]</td>
</tr>
<tr>
    <td align=left bgcolor=#6ab04c width=100px>Operator</td>
    <td align=center>$_GET[opt]</td>
</tr>
<tr bgcolor=#bbdc58>
<td colspan=2 align=center>
    Hasil = $hasil 
    

</td>
</tr>
</table>
    ");

?>