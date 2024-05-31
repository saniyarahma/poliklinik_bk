<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition login-page">
    <div class="container-fluid flex bg-sky-600 flex-col justify-center items-center text-white p-5"
        style="height: 400px; background-color: #244579;">
        <h1 class="font-weight-bold mb-3">Sistem Temu Janji</h1>
        <h1 class="font-weight-bold mb-3">Pasien - Dokter</h1>
        <h5 style="color: rgba(128, 128, 128, 0.5);">Bimbingan Karir 2023 Bidang Web</h5>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div>
                    <div class="card-body">
                        <i class="fas fa-user-alt fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3 class="">Pasien</h3>
                        <p class="card-text">Apabila anda adalah seorang Pasien, Silahkan Login terlebih dahulu untuk
                            melakukan pendaftaran sebagai pasien</p>
                        <a href="loginUser.php" class="text-primary">Klik Link Berikut <i class="fas fa-arrow-right fa-xs"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="card-body">
                        <i class="fa fa-user-md fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3 class="">Dokter</h3>
                        <p class="card-text">Apabila anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk
                            memulai melayani pasien</p>
                        <div class="d-grid">
                            <a href="login.php" class="text-primary">Klik Link Berikut <i class="fas fa-arrow-right fa-xs"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->

    <!-- Divider -->
    <div class="divider"></div>

    <!-- Section Testimoni -->
<div class="container testimoni">
    <div class="heading_container testimoni-heading">
        <h2>Testimoni Pasien</h2>
        <p>Para Pasien Yang Setia</p>
    </div>
    <div class="testimoni-content">
        <!-- Testimoni 1 -->
        <div class="testimonial-box">
            <div class="profile">
                <div class="icon-box">
                    <i class="fas fa-quote-left"></i>
                </div>
                <div class="testimonial-text">
                    <p>Pelayanan di web ini sangat cepat dan mudah, detail histori tercatat lengkap, termasuk catatan
                        obat, harga pelayanan terjangkau, dokter ramah pokoke mantab pol!</p>
                    <div>
                        <p style="color: rgba(128, 128, 128, 0.5);">-Adi, Semarang</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimoni 2 -->
        <div class="testimonial-box">
            <div class="profile">
                <div class="icon-box">
                    <i class="fas fa-quote-left"></i>
                </div>
                <div class="testimonial-text">
                    <p>Aku tidak pernah merasakan mudahnya berobat sebelum mengenal web ini, web yang mudah
                        digunakan dan dokter yang terampil membuat berobat menjadi lebih menyenangkan!</p>
                    <div>
                        <p style="color: rgba(128, 128, 128, 0.5);">-Ida, Semarang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
</body>

</html>