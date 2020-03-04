<?php
echo "Hasil";
$tinggi = $_POST["tinggi"];
$berat = $_POST["berat"];

$hasil = $berat / ($tinggi * $tinggi);

if($hasil < 18.5){
  echo "<br> Anda Kurus";
}else if($hasil >= 18.5 && $hasil < 22.9){
  echo "<br> Anda Normal";
}else if($hasil >= 23 && $hasil < 24.9){
  echo "<br> Anda Overweight";
}else{
  echo "<br> Anda OBESITAS";
}
 ?>
