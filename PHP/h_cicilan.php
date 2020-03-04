<?php
echo "Hasil";
$nominal = $_POST["nominal"];
$periode = $_POST["periode"];
$bunga = $_POST["bunga"];

$pbulan = $nominal / $periode;
$flower = $nominal / 100 * $bunga;
$cicilan = $pbulan + $flower;

echo "<br> Cicilan Anda adalah : Rp $cicilan per bulan";
 ?>
