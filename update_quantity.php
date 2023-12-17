<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari permintaan POST
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $quantity = mysqli_real_escape_string($koneksi, $_POST['quantity']);

    // Update quantity di database
    $query = "UPDATE cart SET quantity = '$quantity' WHERE name = '$nama'";
    $result = mysqli_query($koneksi, $query);

    // Berikan tanggapan
    if ($result) {
        echo "Berhasil mengupdate quantity di database";
    } else {
        echo "Gagal mengupdate quantity di database";
    }
} else {
    // Tanggapan jika bukan metode POST
    echo "Metode tidak valid";
}
?>