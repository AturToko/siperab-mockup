<html lang="en" data-bs-theme="light">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- <script src="js/color-modes.js"></script> -->


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="SIPERAB Theme">
  <meta name="author" content="Faris Amin">
  <title>SIPERAB</title>


  <link rel="stylesheet" href="css/css@3">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <link href="css/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6 vh-100 d-none d-md-flex justify-content-center align-items-center shadow" style="background-color: #f0f1f6;">
        <img src="img/illustration.svg" alt="">
      </div>

      <main class="col-12 col-md-6 ms-sm-auto">

        <div class="vh-100 d-flex flex-column justify-content-center align-items-center mx-auto w-100">
          <div class="text-center mb-4 w-75">
            <img src="img/logo.png" alt="SIPERAB Logo" class="mb-5 w-100" style="max-width: 250px;">
            <h1 class="h4 mb-3 fw-bold">Permintaan Reset Password</h1>
          </div>
          <form class="w-75">
            <div class="mb-3">
              <label for="username" class="form-label fw-bold">Email</label>
              <input type="text" id="username" name="email" class="form-control" placeholder="Masukkan Email" required>
            </div>
            <br>
            <!--
              Berikan error:
                1. "Email tidak terdaftar" jika email tidak ada di database atau status user tidak aktif
              Berikan notifikasi:
                1. "Silakan cek email Anda untuk melakukan reset password" jika email sesuai pada database dan email berhasil dikirimkan
            -->
            <button class="btn w-100 main-gradient text-white" type="submit">Reset</button>
          </form>
          <div class="text-end">
            <a href="login.php" class="text-muted text-decoration-none"><small>Kembali ke Login</small></a>
          </div>
        </div>

        <footer class="mt-3 rounded-4 position-absolute bottom-0">
          Copyright © 2023 Dinas Bina Marga dan Sumber Daya Air Kabupaten Tangerang
        </footer>
      </main>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>
