<?php include('header.php'); ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-3 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2">Pengaturan Pejabat Penanda Tangan</h1>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5" data-bs-toggle="modal"
              data-bs-target="#addPejabat">Tambah Data</button>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="table-responsive m-0 p-0">
                <div class="d-flex flex-row gap-2 align-items-center justify-content-between mb-3">
                  <div>Tampil</div>
                  <select class="form-select form-select-sm" name="perpage" id="perpage" style="width: auto;">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                  <div class="flex-grow-1"></div>
                  <div>Pencarian</div>
                  <input type="search" name="keyword" id="keyword" class="form-control form-control-sm"
                    style="width: auto;">
                </div>
                <table class="table table-hover" style="font-size: 14px;">
                  <col width="5%">
                  <col width="30%">
                  <col width="20%">
                  <col width="20%">
                  <col width="15%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Pejabat</th>
                      <th scope="col">NIP</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col" class="text-center">Status</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Agung Gumelar</td>
                      <td>321321321321321</td>
                      <td>Kepala Dinas</td>
                      <td class="text-center">
                        <h5><span class="badge bg-success-subtle text-success rounded-pill fw-medium">Aktif</span></h5>
                      </td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addPejabat"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2</td>
                      <td>Drs. Yogi Muryanto</td>
                      <td>123123123123123</td>
                      <td>Kepala Bidang</td>
                      <td class="text-center">
                        <h5><span class="badge bg-success-subtle text-success rounded-pill fw-medium">Aktif</span></h5>
                      </td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addPejabat"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">3</td>
                      <td>Soca Anggoro</td>
                      <td>198703242011012002</td>
                      <td>Kepala Seksi</td>
                      <td class="text-center">
                        <h5><span class="badge bg-success-subtle text-success rounded-pill fw-medium">Aktif</span></h5>
                      </td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addPejabat"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <nav aria-label="User Pagination">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal Window to Create or Edit Pejabat -->
        <div class="modal fade" id="addPejabat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addPejabatLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Entri/Edit Pejabat Penanda Tangan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="namaPejabat" class="form-label">Nama Pejabat <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="namaPejabat" placeholder="isi dengan nama pejabat">
                </div>
                <div class="mb-3">
                  <label for="nip" class="form-label">NIP <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="nip" placeholder="isi dengan NIP pejabat">
                </div>
                <div class="mb-3">
                  <label for="jabatan" class="form-label">Jabatan <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="jabatan" placeholder="isi dengan jabatan">
                </div>
                <div class="mb-3">
                  <label for="userStatus" class="form-label">Status <sup class="text-danger">*</sup></label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="userStatus" id="active" value="active" checked>
                    <label class="form-check-label" for="active">Aktif</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="userStatus" id="inactive" value="inactive">
                    <label class="form-check-label" for="inactive">Tidak Aktif</label>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for delete confirmation -->
        <div class="modal fade" id="deleteConfirm" aria-hidden="true" aria-labelledby="deleteConfirmLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-6" id="deleteConfirmLabel">Hapus Pejabat</h1>
              </div>
              <div class="modal-body">
                Anda yakin ingin menghapus data {nama_pejabat}?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>

<?php include('footer.php'); ?>
