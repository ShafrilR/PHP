<?php
$harga_akhir = $_POST["harga_akhir"];
$laba = $_POST["laba"];
$ha = ($harga_akhir) + ($laba * $harga_akhir);
if($ha >= 10000 && $ha <= 15000){
  echo "<br> Anda mendapat diskon 10%";
  echo "<br> Total : ";
  $disk = (10/100) * $ha;
  $tot = $ha - $disk;
  echo "<br> Rp $tot";
}else if($ha > 15000 && $ha <= 30000){
  echo "<br> Anda mendapat diskon 20%";
  echo "<br> Total : ";
  $disk = (20/100) * $ha;
  $tot = $ha - $disk;
  echo "<br> Rp $tot";
}else if($ha > 30000){
  echo "<br> Anda mendapat diskon 30%";
  echo "<br> Total : ";
  $disk = (30/100) * $ha;
  $tot = $ha - $disk;
  echo "<br> Rp $tot";
}
 ?>
