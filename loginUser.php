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
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="index.php" class="h1"><b>Poli</b>klinik</a>
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign In</p>

                <form action="pages/loginUser/checkLoginUser.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username | Case Sensitive" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password | Case Sensitive" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" id="remember_me" name="remember_me" class="form-check-input">
                            <label for="remember_me" class="form-check-label">Remember Me</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                    </div>
                    <!-- <button type="submit" class="btn btn-block btn-primary">
                        Login
                    </button> -->
                </form>
                <div class="social-auth-links text-left">
                        <p><span><a href="register.php">Register a new account</a></span></p>
                </div>

                <!-- <div class="social-auth-links text-center mb-3">
                    <p>- Belum punya akun pasien? -</p>
                    <a href="register.php" class="btn btn-block btn-secondary">
                        Register
                    </a>
                </div> -->
                <!-- /.social-auth-links -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>