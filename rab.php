<?php include 'header.php';?>

      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-3 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2">Data Rencana Anggaran Biaya</h1>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5" data-bs-toggle="modal"
              data-bs-target="#addRAB">Tambah Data</button>
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
                  <col width="15%">
                  <col width="15%">
                  <col width="15%">
                  <col width="15%">
                  <col width="15%">
                  <col width="5%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kegiatan</th>
                      <th scope="col">Pekerjaan</th>
                      <th scope="col">Kecamatan</th>
                      <th scope="col">Pagu Anggaran</th>
                      <th scope="col">Dibuat Oleh</th>
                      <th scope="col">Tanggal Dibuat</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Peningkatan Jl. Binong - Jatake</td>
                      <td>Rehabilitasi Jalan Legok</td>
                      <td>Jatake</td>
                      <td>5.000.000.000</td>
                      <td>Audhi</td>
                      <td>12-10-2023</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#viewRAB"><i class="fas fa-file"></i></button>
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addRAB"><i class="fas fa-edit"></i></button>
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
        <div class="modal modal-xl fade" id="addRAB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addRAB" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Entri RAB</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="mb-3">
                        <label for="namaKegiatan" class="form-label fw-bold">Kegiatan <sup class="text-danger">*</sup></label>
                        <select class="form-select" name="namaKegiatan" id="namaKegiatan">
                          <option value="A">Kegiatan A</option>
                          <option value="B">Kegiatan B</option>
                          <option value="C">Kegiatan C</option>
                          <option value="D">Kegiatan D</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="paguAnggaran" class="form-label fw-bold">Pagu Anggaran <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="paguAnggaran" placeholder="isi dengan pagu anggaran" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="kecamatan" class="form-label fw-bold">Kecamatan <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="kecamatan" placeholder="isi dengan nama kecamatan">
                      </div>
                      <div class="mb-3">
                        <label for="jenis" class="form-label fw-bold">Tags/Jenis <sup class="text-danger">*</sup></label>
                        <select class="form-select" name="jenis" id="jenis">
                          <option>Pilih Tag/Jenis</option>
                          <option value="bongkar">Bongkar</option>
                          <option value="non-bongkar">Non Bongkar</option>
                          <option value="semi-bongkar">Semi Bongkar</option>
                          <option value="setengah-bongkar">Setengah Bongkar</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="entryStatus" class="form-label">Status <sup class="text-danger">*</sup></label>
                        <br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="entryStatus" id="draft" value="draft" checked>
                          <label class="form-check-label" for="draft">Draft</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="entryStatus" id="final" value="final">
                          <label class="form-check-label" for="final">Final</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="mb-3">
                        <label for="namaPekerjaan" class="form-label">Pekerjaan <sup class="text-danger">*</sup></label>
                        <select class="form-select" name="namaPekerjaan" id="namaPekerjaan" disabled readonly>
                          <!-- Selection ini dibuat disabled readonly dulu kalau Kegiatan belum dipilih. 
                            Setelah user memilih Kegiatan, maka semua Pekerjaan di bawah Kegiatan tersebut ditampilkan -->
                          <option>Pilih kegiatan terlebih dahulu</option>
                          <option value="A">Pekerjaan A</option>
                          <option value="B">Pekerjaan B</option>
                          <option value="C">Pekerjaan C</option>
                          <option value="D">Pekerjaan D</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control datepicker" id="tanggal" placeholder="pilih tanggal">
                      </div>
                      <div class="mb-3">
                        <label for="koderuas" class="form-label">Kode Ruas Kabupaten <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="koderuas" placeholder="isi dengan kode ruas kabupaten">
                      </div>
                      <div class="mb-3">
                        <label for="ppn" class="form-label">PPN (%) <sup class="text-danger">*</sup></label>
                        <input type="number" class="form-control" id="ppn" placeholder="isi dengan nilai persentase PPN">
                      </div>
                    </div>
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
                <h1 class="modal-title fs-6" id="deleteConfirmLabel">Hapus RAB</h1>
              </div>
              <div class="modal-body">
                Anda yakin ingin menghapus data {rab}?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>

<?php include 'footer.php';?>
