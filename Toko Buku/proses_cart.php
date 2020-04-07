<?php
  session_start();
  include("configtoko.php");

// menambah barang ke cart
  if (isset($_POST["add_to_cart"])) {
    // tampung kode_buku dan jumlah Beli
    $kode_buku = $_POST["kode_buku"];
    $jumlah_beli = $_POST["jumlah_beli"];

    // ambil data buku dari database sesuai dengan kode buku yanng dipilih
    $sql = "select * from buku where kode_buku='$kode_buku'";
    $query = mysqli_query($connect, $sql); // eksekusi sintak sql sqlnya
    $buku = mysqli_fetch_array($query); // menampung data dari database ke array

    $item = [
      "kode_buku" => $buku["kode_buku"],
      "judul" => $buku["judul"],
      "image" => $buku["image"],
      "harga" => $buku["harga"],
      "jumlah_beli" => $jumlah_beli
    ];

    // masukkan item ke keranjang (cart)
    array_push($_SESSION["cart"], $item);

    header("location:tampilan_customer.php");
  }

  // untuk mengapus item pada cart
  if (isset($_GET["hapus"])) {
    // tampung data kode_buku yang dihapus
    $kode_buku = $_GET["kode_buku"];

    // cari index cart sesuai dengan kode_buku yang diahpus
    $index = array_search(
      $kode_buku, array_column(
        $_SESSION["cart"],"kode_buku"
        )
    );

    // hapus item pada Cart
    array_splice($_SESSION["cart"],$index, 1);
    header("location:cart.php");
  }

  // Checkout
  if (isset($_GET["checkout"])) {
    // code...
  }
 ?>
