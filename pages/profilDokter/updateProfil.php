<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idDokter = $_POST['idDokter'];
    // Ambil nilai dari form
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $alamat = $_POST['alamat'];

    // Query untuk mengupdate data dokter tanpa mengubah password
    $query = "UPDATE dokter SET 
    nama = '$nama', 
    no_hp = '$no_hp',
    alamat = '$alamat'
    WHERE id = '$idDokter'";

    // Eksekusi query
    if (mysqli_query($mysqli, $query)) {
        // Jika berhasil, redirect kembali ke halaman profil dokter
        echo '<script>';
        echo 'alert("Data dokter berhasil diubah!");';
        echo 'window.location.href = "../../profilDokter.php";';
        echo '</script>';
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}

// Tutup koneksi
mysqli_close($mysqli);
?>
