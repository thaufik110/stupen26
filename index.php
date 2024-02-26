<?php
date_default_timezone_set("Asia/Jakarta");
session_start();

if (count($_POST) > 0) {
    print_r($_POST);

    $nama = "Taufik Hidayat";
    $gmail = "payakumbuh110@gmail.com";
    $wa = "083165619029";
    $alamat = "Payakumbuh";

    if ($_POST["nama"] == $nama && $_POST["gmail"] == $gmail && $_POST["wa"] == $wa && $_POST["alamat"] == $alamat) {
        echo "Save Data Selesai";
    } else {
        echo "Data Salah";
    }
}
?>

<form action="" method="post">
    <input type="text" placeholder="nama" name="nama" />
    <input type="text" placeholder="gmail" name="gmail" />
    <input type="number" placeholder="wa" name="wa" />
    <input type="text" placeholder="alamat" name="alamat" />
    <button type="submit"> Simpan</button>
</form>
