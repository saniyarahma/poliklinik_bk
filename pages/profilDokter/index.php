<section class="content">
    <div class="container-fluid">
        <div>
            <div class="col-md-3 mt-4">

                        <?php 
                            require 'config/koneksi.php';
                            $dataDokter = mysqli_query($mysqli, "SELECT dokter.nama, poli.nama_poli, dokter.alamat, dokter.no_hp FROM dokter INNER JOIN poli ON dokter.id_poli = poli.id WHERE dokter.id = '$idDokter'");
                            $getData = mysqli_fetch_assoc($dataDokter);
                        ?>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
            <div class="col-md-9 mt-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="pages/profileDokter/editProfile.php" method="post">
                            <input type="hidden" value="<?php echo $idDokter ?>" name="idDokter">
                            <div class="form-group mb-3">
                                <label for="nama font-weight-bold">Nama</label>
                                <input type="text" class="form-control" name="nama"
                                    value="<?php echo $getData['nama'] ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_hp font-weight-bold">No Telpon</label>
                                <input type="text" class="form-control" name="no_hp"
                                    value="<?php echo $getData['no_hp'] ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" rows="3" id="alamat" name="alamat"
                                    required><?php echo $getData['alamat'] ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">
                                Simpan
                            </button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>