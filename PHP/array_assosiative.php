<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assosiative</title>
</head>
<body>
    <?php
    // ada 2 tipe array
    // 1 array numerik adalah array yang indexnya berupa angka
    // 2 array assosisative adalah array yang indexnya berupa string
    $siswa = [
        [
            // key --> value
            "NISN" => "1001",
            "Nama" => "Shafrell",
            "Alamat" => "Bondowoso"
        ],
        [
            "NISN" => "1002",
            "Nama" => "Aril",
            "Alamat" => "Pancoran"
        ],
        [
            "NISN" => "1003",
            "Nama" => "Hidayat",
            "Alamat" => "Pandian"
        ]
    ];
    ?>

    <h3>Data Siswa</h3>
    <table border="1" cellpadding="0">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $s): ?>
                <tr>
                    <td><?php echo $s["NISN"]; ?></td>
                    <td><?php echo $s["Nama"]; ?></td>
                    <td><?php echo $s["Alamat"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
