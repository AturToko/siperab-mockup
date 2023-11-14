<?php include('header.php'); ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-3 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2">Daftar Laporan Lampiran Sub Uraian Pekerjaan</h1>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="table-responsive m-0 p-0">
                <!-- Nama Kegiatan yang sedang dilihat detail Sub Uraiannya. Jika diklik, kembali ke list Laporan -->
                <h2 class="h5 mb-3">&laquo; <a href="laporan-rab.php" class="text-muted">Peningkatan Jl. Binong - Jatake</a></h2>
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
                  <col width="25%">
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kegiatan</th>
                      <th scope="col">Perkiraan Volume</th>
                      <th scope="col">Harga Satuan (Rp)</th>
                      <th scope="col">Total</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Perkerasan Beton</td>
                      <td>1 LS</td>
                      <td>5.000.000,00</td>
                      <td>5.000.000,00</td>
                      <td class="text-center text-nowrap">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#exportReport" title="Ekspor"><i class="fas fa-file-export"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2</td>
                      <td>Perkerasan Lentur</td>
                      <td>1 LS</td>
                      <td>2.000.000,00</td>
                      <td>2.000.000,00</td>
                      <td class="text-center text-nowrap">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#exportReport" title="Ekspor"><i class="fas fa-file-export"></i></button>
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

        <!-- Modal Window to Export RAB Sub Uraian -->
        <div class="modal fade" id="exportReport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="exportReportLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ekspor RAB Sub Uraian</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="disetujui" class="form-label fw-bold">Disetujui <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Pejabat untuk field Disetujui" id="disetujui">
                    <option>Pilih Pejabat untuk field Disetujui</option>
                    <option value="1">IWAN FIRMANSAH EFFENDI, S.Sos., S.T., M.Si.</option>
                    <option value="2">SOCA ANGGORO WULAN, S.T., M.Eng.</option>
                    <option value="2">YAWAN DURIYAWAN, S.T.</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="diperiksa" class="form-label fw-bold">Diperiksa <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Pejabat untuk field Diperiksa" id="diperiksa">
                    <option>Pilih Pejabat untuk field Diperiksa</option>
                    <option value="1">IWAN FIRMANSAH EFFENDI, S.Sos., S.T., M.Si.</option>
                    <option value="2">SOCA ANGGORO WULAN, S.T., M.Eng.</option>
                    <option value="2">YAWAN DURIYAWAN, S.T.</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="mengetahui" class="form-label fw-bold">Mengetahui <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Pejabat untuk field Mengetahui" id="mengetahui">
                    <option>Pilih Pejabat untuk field Mengetahui</option>
                    <option value="1">IWAN FIRMANSAH EFFENDI, S.Sos., S.T., M.Si.</option>
                    <option value="2">SOCA ANGGORO WULAN, S.T., M.Eng.</option>
                    <option value="2">YAWAN DURIYAWAN, S.T.</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="eksporKe" class="form-label">Ekspor Ke <sup class="text-danger">*</sup></label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="eksporKe" id="excelExport" value="excelExport" checked>
                    <label class="form-check-label" for="excelExport">Excel</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="eksporKe" id="pdfExport" value="pdfExport">
                    <label class="form-check-label" for="pdfExport">PDF</label>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-info">Proses</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for delete confirmation -->
        <div class="modal fade" id="deleteConfirm" aria-hidden="true" aria-labelledby="deleteConfirmLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-6" id="deleteConfirmLabel">Hapus Tahun Anggaran</h1>
              </div>
              <div class="modal-body">
                Anda yakin ingin menghapus data {tahun_anggaran}?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>

<?php include('footer.php'); ?>
