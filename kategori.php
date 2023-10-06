<?php include('header.php'); ?>

      <!-- Begin Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-3 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2">Master Kategori Uraian Pekerjaan</h1>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="table-responsive m-0 p-0">
                <div class="d-flex flex-row gap-2 align-items-center justify-content-between mb-3">
                  <div class="flex-grow-1"></div>
                  <div>Pencarian</div>
                  <input type="search" name="keyword" id="keyword" class="form-control form-control-sm"
                    style="width: auto;">
                </div>
                <table class="table table-hover" style="font-size: 14px;">
                  <col width="5%">
                  <col width="85%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">Nomor</th>
                      <th scope="col">Nama Divisi/Kategori Uraian Pekerjaan</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">1</td>
                      <td class="fw-bold">UMUM</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addKategori"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.1</td>
                      <td>Mobilisasi</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addKategori"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.2</td>
                      <td>Manajemen dan Keselamatan Lalu Lintas</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addKategori"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">2</td>
                      <td class="fw-bold">DRAINASE</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addKategori"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2.1</td>
                      <td>Galian</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addKategori"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2.2</td>
                      <td>Manajemen dan Keselamatan Lalu Lintas</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addKategori"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal Window to Create or Edit Kategori -->
        <div class="modal fade" id="addKategori" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addKategoriLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Entri/Edit Data Kategori Uraian Pekerjaan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="namaDivisi" class="form-label fw-bold">Nama Divisi</label>
                  <input type="text" readonly disabled class="form-control" id="namaDivisi" placeholder="isi dengan nama divisi" value="1. UMUM">
                </div>
                <div class="mb-3">
                  <label for="nomor" class="form-label fw-bold">Nomor <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="nomor" placeholder="isi dengan nomor">
                </div>
                <div class="mb-3">
                  <label for="namaKategori" class="form-label fw-bold">Nama Kategori Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="namaKategori" placeholder="isi dengan nama kategori uraian pekerjaan">
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
                <h1 class="modal-title fs-6" id="deleteConfirmLabel">Hapus Kategori</h1>
              </div>
              <div class="modal-body">
                Anda yakin ingin menghapus kategori {nama_kategori}?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>

<?php include('footer.php'); ?>
