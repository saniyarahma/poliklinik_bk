<?php
session_start();
require '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah yang login adalah admin
    if ($username == "admin" && $password == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['akses'] = "admin";
        header("location:../../dashboard.php");
    } else {
        // Jika bukan admin, cek sebagai dokter
        $query = "SELECT * FROM dokter WHERE nama = '$username'";
        $result = mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);

            // Periksa apakah password sama dengan alamat
            if ($password == $data['alamat']) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['nama'];
                $_SESSION['id_poli'] = $data['id_poli'];
                $_SESSION['akses'] = "dokter";
                header("location:../../dashboard.php");
            } else {
                // Jika password tidak cocok dengan alamat
                echo '<script>alert("Password tidak cocok dengan alamat.");location.href="../../login.php";</script>';
            }
        } else {
            // Jika username tidak ditemukan
            echo '<script>alert("Username tidak ditemukan.");location.href="../../login.php";</script>';
        }
    }
}
?>
