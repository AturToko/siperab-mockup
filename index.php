<?php include('header.php'); ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-3 shadow rounded-4">
          <h1 class="h2">Dashboard</h1>

          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="card dashboard-card rounded-4">
                  <div class="card-body">
                    <img src="img/equalizer.png" alt="Jumlah RAB Bulan Ini" class="pb-2">
                    <h4 class="card-title">12</h4>
                    <p class="card-text">Jumlah RAB Bulan Ini</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card dashboard-card rounded-4">
                  <div class="card-body">
                    <img src="img/equalizer.png" alt="Nilai RAB Bulan Ini" class="pb-2">
                    <h4 class="card-title">Rp. 600.000.000</h4>
                    <p class="card-text">Nilai RAB Bulan Ini</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card dashboard-card rounded-4">
                  <div class="card-body">
                    <img src="img/equalizer.png" alt="Jumlah RAB Tahun Ini" class="pb-2">
                    <h4 class="card-title">32</h4>
                    <p class="card-text">Jumlah RAB Tahun Ini</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card dashboard-card rounded-4">
                  <div class="card-body">
                    <img src="img/equalizer.png" alt="Nilai RAB Tahun Ini" class="pb-2">
                    <h4 class="card-title">Rp. 1.600.000.000</h4>
                    <p class="card-text">Nilai RAB Tahun Ini</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <canvas class="my-4 w-100" id="myChart" width="1537" height="649"
            style="display: block; box-sizing: border-box; height: 649px; width: 1537px;"></canvas>
        </div>

<?php include('footer.php'); ?>
