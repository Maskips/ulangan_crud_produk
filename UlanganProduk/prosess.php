<?php

    include '../db_produk.php';
    $produk = new Produk();

    $aksi = $_GET['aksi'];
    if (isset($_POST['save'])) {
        $id        = $_POST['id'];
        $nama      = $_POST['nama'];
        $kategori  = $_POST['kategori'];
        $jumlah    = $_POST['jumlah'];
        $harga     = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $subtotal  = $jumlah*$harga;
    }

    if ($aksi == "tambah") {
        $produk->create($nama, $kategori, $jumlah, $harga, $deskripsi, $subtotal);
        header("Location:indexx.php");
    } elseif ($aksi == "update") {
        $produk->update($id, $nama, $kategori, $jumlah, $harga, $deskripsi, $subtotal);
        header("Location:indexx.php");
    } elseif ($aksi == "delete") {
        $produk->delete($_GET['id']);
        header("Location:indexx.php");
    }

?>