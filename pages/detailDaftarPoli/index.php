<?php
require 'config/koneksi.php';
$id = $_GET['id'];
$ambilDetail = mysqli_query($mysqli, "SELECT daftar_poli.id as idDaftarPoli, poli.nama_poli, dokter.nama, jadwal_periksa.hari, DATE_FORMAT(jadwal_periksa.jam_mulai, '%H:%i') as jamMulai, DATE_FORMAT(jadwal_periksa.jam_selesai, '%H:%i') as jamSelesai, daftar_poli.no_antrian FROM daftar_poli INNER JOIN jadwal_periksa ON daftar_poli.id_jadwal = jadwal_periksa.id INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id INNER JOIN poli ON dokter.id_poli = poli.id WHERE daftar_poli.id = '$id'");
$data = mysqli_fetch_assoc($ambilDetail);
?>

<section class="content">
    <div class="card card-primary">
        <div class="card-header text-center">
            <h3 class="card-title">Detail Poli</h3>
        </div>
        <div class="card-body d-flex flex-column align-items-center">
            <div class="col-md-8 text-center">
                <h5 class="card-text">Nama Poli</h5>
                <p class="card-text"><?php echo $data['nama_poli']; ?></p>
                <hr style="width: 100%;">

                <h5 class="card-text">Nama Dokter</h5>
                <p class="card-text"><?php echo $data['nama']; ?></p>
                <hr style="width: 100%;">

                <h5 class="card-text">Hari</h5>
                <p class="card-text"><?php echo $data['hari']; ?></p>
                <hr style="width: 100%;">

                <h5 class="card-text">Jam Periksa</h5>
                <p class="card-text"><?php echo $data['jamMulai']?></p>
                <hr style="width: 100%;">

                <h5 class="card-text">Jam Selesai</h5>
                <p class="card-text"><?php echo $data['jamSelesai']?></p>
                <hr style="width: 100%;">

                <h5 class="card-text">No Antrian</h5>
                <div class="rounded-lg bg-primary text-center text-white py-2 px-3 mx-auto d-flex justify-content-center align-items-center" style="height: 30px; width: 30px;">
                    <h2 style="font-size: 1.2rem; margin: 0;"><?php echo $data['no_antrian']; ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary">
            <a href="daftarPoliklinik.php" class="btn btn-primary">Kembali</a>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
