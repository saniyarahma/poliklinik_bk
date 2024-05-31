<?php
session_start();
require '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; // Menggunakan alamat sebagai password

    // Query untuk mengecek apakah user (pasien) ada berdasarkan nama
    $query = "SELECT * FROM pasien WHERE nama = '$username'";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        // Periksa apakah password (alamat) cocok dengan alamat yang ada di database
        if ($password == $data['alamat']) {
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $data['nama'];
            $_SESSION['no_rm'] = $data['no_rm'];
            $_SESSION['akses'] = "pasien";

            header("location:../../daftarPoliklinik.php");
        } else {
            // Jika password tidak cocok dengan alamat
            echo '<script>alert("Password tidak cocok dengan alamat.");location.href="../../loginUser.php";</script>';
        }
    } else {
        // Jika username tidak ditemukan
        echo '<script>alert("Username tidak ditemukan.");location.href="../../loginUser.php";</script>';
    }
}
?>
