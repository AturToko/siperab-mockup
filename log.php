<?php include('header.php'); ?>

      <!-- Begin Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-5 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2">Log Histori</h1>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="table-responsive m-0 p-0">
                <h1 class="text-center text-danger">MENUNGGU DESAIN</h1>
                <div class="d-flex flex-row gap-2 align-items-center justify-content-between mb-3">
                  <div class="flex-grow-1"></div>
                  <div>Pencarian</div>
                  <input type="search" name="keyword" id="keyword" class="form-control form-control-sm"
                    style="width: auto;">
                </div>
                <table class="table table-hover" style="font-size: 14px;">
                  <col width="10%">
                  <col width="60%">
                  <col width="10%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Event</th>
                      <th scope="col">User</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg table-secondary">
                      <td scope="row">05-10-2023 17.00</td>
                      <td>Login Berhasil</td>
                      <td>Jane Doe</td>
                      <td class="text-center"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

<?php include('footer.php'); ?>
