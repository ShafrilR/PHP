<?php
    // echo "PHP itu apa?";

    //untuk membuat variable dengan simbol "$"
    $nama_depan = "Shafril";
    $nama_belakang = "Rizqian";
    echo "$nama_depan $nama_belakang";

    // --operator--
    $angka1 = 90;
    $angka2 = 80;
    $hasil = ($angka1 + $angka2) * ($angka1 % $angka2) - ($angka1 * $angka2);
    echo "<br> Hasilnya adalah : $hasil";
    echo "<br> Operator perbandingan : ".($angka1 > $angka2);

    // kondisi (if else)
    $tahun = 2020;
    if($tahun % 4 == 0){
        echo "<br> $tahun ini adalah kabisat";
    }else{
        echo "<br> $tahun bukan kabisat";
    }

    //array gae kurung siku []
    $buah = ["Pisang","Duren","Apel","Semangka","Melon"];

?>
<ul>
    <?php foreach ($buah as $b): ?>
        <li><?php echo $b; ?></li>
    <?php endforeach; ?>
</ul>
