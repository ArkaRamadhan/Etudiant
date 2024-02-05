<?php
include 'koneksi.php';

    $email = strtolower(stripslashes($_POST['email']));
    $password = $_POST['password'];
    $level = 'user';

    // cek username sudah ada atau belum
    include 'koneksi.php';
    $hasil = mysqli_query($koneksi, "select * from login where email='$email'");

    if (mysqli_fetch_assoc($hasil)) {
        echo "<script>
                    alert('Username ini sudah di pakai');
                </script>";
        return false;
    }


    include 'koneksi.php';
    // enkripsi password





            mysqli_query($koneksi, "insert into login values('','$email', '$password','$level')");
            header("location:login.php");
            return mysqli_affected_rows($koneksi);



?>