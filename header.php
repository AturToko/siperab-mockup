<html lang="en" data-bs-theme="light">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

  <header class="navbar sticky-top bg-white flex-md-nowrap p-0" data-bs-theme="light">
    <a class="navbar-brand col-md-3 col-lg-2 my-0 me-0 px-3 fs-6 text-primary border-end" href="#">
      <img src="img/logo.png" class="main-logo" alt="SIPERAB Logo">
    </a>

    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-primary" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
      </li>
    </ul>

    <ul class="navbar-nav flex-row flex-grow-1 main-gradient align-items-center col-md-9 rounded-4" id="header">
      <li class="nav-item text-nowrap">
        <div class="d-flex flex-row">
          <button class="nav-link px-3 text-white d-none d-sm-block" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <select name="tahunanggaran" id="tahunanggaran" class="form-select form-select-sm" style="width: auto;">
            <option value="2023" selected>2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
          </select>
        </div>
      </li>
      <li class="nav-item text-nowrap">
        <div class="d-flex flex-row align-items-center">
          <div class="user-info">
            <div class="user-name">Jane Doe</div>
            <div class="user-role">Superadmin</div>
          </div>
          <div class="profile-picture">
            <img src="img/profile/user.png" alt="Profile Picture">
          </div>
          <div class="logout">
            <button class="btn btn-link text-white fs-5"><i class="fas fa-sign-out-alt"></i></button>
          </div>
        </div>
      </li>
    </ul>

  </header>

  <div class="container-fluid">
    <div class="row">
      <?php include 'menu.php';?>
