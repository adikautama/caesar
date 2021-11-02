<?php
$key = $_GET["key"]; // method post dan get
$nmfile="enkripsi.txt";
$fp=fopen($nmfile,"r");
$isi=fread($fp.filesize($nmfile));

for($i=0;$i<strlen($isi);$i++)
{
$kode[$i]=ord($isi[$i]); //rubah ASCII ke desimal
$b[$i]=($kode[$i] + $key ) % 256; //proses enkripsi
$c[$i]=chr($b[$i]); //rubah desimal ke ASCII
}
echo "kalimat chipertext : ";
for($i=0;$i<strlen($kalimat);$i++)
{
echo $isi[$i];
}
echo "<br>";
echo "hasil deskripsi =";
for ($i=0;$i<strlen($kalimat);$i++)
{
echo $c[$i];
}
echo "<br>";
?>