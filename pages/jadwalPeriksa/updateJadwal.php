<?php
include '../../config/koneksi.php';
session_start();

if (isset($_POST['updateJadwal'])) {
    // Ambil nilai dari form
    $id = $_POST['id'];
    $hari = $_POST["hari"];
    $jamMulai = $_POST["jamMulai"];
    $jamSelesai = $_POST["jamSelesai"];

    // Ambil ID dokter dari jadwal yang sedang diupdate
    $queryGetDokter = "SELECT id_dokter FROM jadwal_periksa WHERE id = '$id'";
    $resultGetDokter = mysqli_query($mysqli, $queryGetDokter);
    $row = mysqli_fetch_assoc($resultGetDokter);
    $idDokter = $row['id_dokter'];

    // Query untuk memeriksa tumpang tindih jadwal dengan dokter yang sama
    $queryOverlap = "SELECT * FROM jadwal_periksa WHERE id_dokter = '$idDokter' AND id != '$id' AND hari = '$hari' 
                     AND ((jam_mulai < '$jamSelesai' AND jam_selesai > '$jamMulai') OR 
                          (jam_mulai < '$jamMulai' AND jam_selesai > '$jamMulai'))";

    $resultOverlap = mysqli_query($mysqli, $queryOverlap);

    if (mysqli_num_rows($resultOverlap) > 0) {
        echo '<script>alert("Dokter ini sudah memiliki jadwal pada waktu tersebut");window.location.href="../../jadwalPeriksa.php";</script>';
    } else {
        // Query untuk mengupdate jadwal periksa
        $query = "UPDATE jadwal_periksa SET hari = '$hari', jam_mulai = '$jamMulai', jam_selesai = '$jamSelesai' WHERE id = '$id'";
        if (mysqli_query($mysqli, $query)) {
            echo '<script>';
            echo 'alert("Jadwal berhasil diubah!");';
            echo 'window.location.href = "../../jadwalPeriksa.php";';
            echo '</script>';
            exit();
        } else {
            // Jika terjadi kesalahan, tampilkan pesan error
            echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
        }
    }
}

// Tutup koneksi
mysqli_close($mysqli);
?>
