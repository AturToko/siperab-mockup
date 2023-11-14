<?php include('header.php'); ?>

      <!-- Begin Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-5 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2">Pengaturan Harga Satuan Tahun 2023</h1>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5" data-bs-toggle="modal"
            data-bs-target="#addKategori">Tambah Kategori</button>
          </div>
          
          <div class="container-fluid">
            <div class="row">
              <div class="table-responsive m-0 p-0">
                <!-- Nama Uraian Pekerjaan yang sedang dilihat detail Sub Uraiannya -->
                <h2 class="h5 mb-3">&laquo; <a href="harga.php" class="text-muted">1.1.1 Mobilisasi Perkerasan Beton</a></h2>
                <div class="d-flex flex-row gap-2 align-items-center justify-content-between mb-3">
                  <div class="flex-grow-1">
                    
                  </div>
                  <div>Pencarian</div>
                  <input type="search" name="keyword" id="keyword" class="form-control form-control-sm"
                    style="width: auto;">
                </div>
                <table class="table table-hover" style="font-size: 14px;">
                  <col width="10%">
                  <col width="60%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">No Mata Anggaran</th>
                      <th scope="col">Kategori Sub Uraian Pekerjaan/Nama Sub Uraian Pekerjaan</th>
                      <th scope="col">Harga Satuan</th>
                      <th scope="col" class="text-center">Satuan</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">A</td>
                      <td class="fw-bold">SEWA TANAH</td>
                      <td></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addHarga" title="Tambah Sub Uraian"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Sewa Tanah</td>
                      <td class="text-end">3.000.000,00</td>
                      <td class="text-center">m<sup>2</sup></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHarga"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2</td>
                      <td>Sewa Tanah Keras</td>
                      <td class="text-end">4.000.000,00</td>
                      <td class="text-center">m<sup>2</sup></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHarga"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">B</td>
                      <td class="fw-bold">PERALATAN</td>
                      <td></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addHarga" title="Tambah Sub Uraian"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Asphalt Mixing Plant 150 HP</td>
                      <td class="text-end"></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHarga"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">C</td>
                      <td class="fw-bold">KANTOR LAPANGAN DAN FASILITAS</td>
                      <td></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addHarga" title="Tambah Sub Uraian"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Base Camp</td>
                      <td class="text-end">2.000.000,00</td>
                      <td class="text-center">Bulan</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHarga"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2</td>
                      <td>Gudang dan Lain-lain</td>
                      <td class="text-end"></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHarga"><i class="fas fa-edit"></i></button>
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

        <!-- Modal Window to Copy Data -->
        <div class="modal fade" id="copyData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="copyDataLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Copy Harga Satuan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="copyDari" class="form-label fw-bold">Copy Dari Tahun <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Tahun Anggaran" id="copyDari">
                    <option>Pilih Tahun Anggaran</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="copyKe" class="form-label fw-bold">Copy Ke Tahun <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Tahun Anggaran" id="copyKe">
                    <option>Pilih Tahun Anggaran</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Window to Create Harga -->
        <div class="modal fade" id="addHarga" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addHargaLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Input Harga Satuan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="namaKategoriSub" class="form-label fw-bold">Kategori Sub Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Kategori Sub Uraian Pekerjaan" id="namaKategoriSub"
                  onchange="document.getElementById('subUraianPekerjaan').disabled = this.value == undefined">
                    <option>Pilih Kategori Sub Uraian Pekerjaan</option>
                    <option value="1">SEWA TANAH</option>
                    <option value="2">PERALATAN</option>
                    <option value="3">KANTOR LAPANGAN DAN FASILITAS</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="subUraianPekerjaan" class="form-label fw-bold">Sub Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <!-- Pilihan disabled dulu sebelum memilih Kategori Sub Uraian Pekerjaan di atas -->
                  <select class="form-select" placeholder="Pilih Sub Uraian Pekerjaan" id="subUraianPekerjaan" disabled
                    onchange="document.getElementById('satuan').value = 'm&sup2;'">
                    <option>Pilih Sub Uraian Pekerjaan</option>
                    <option value="1">Sewa Tanah</option>
                    <option value="2">Sewa Tanah Keras</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="satuan" class="form-label fw-bold">Satuan</label>
                  <!-- Default value ambil dari master Sub Uraian Pekerjaan sesuai pilihan di atas -->
                  <input type="text" readonly disabled class="form-control" id="satuan" value="">
                </div>
                <div class="mb-3">
                  <label for="hargaSatuan" class="form-label fw-bold">Harga Satuan <sup class="text-danger">*</sup></label>
                  <input type="number" class="form-control" id="hargaSatuan" placeholder="isi dengan harga satuan">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal Window to Edit Harga -->
        <div class="modal fade" id="editHarga" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="editHargaLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Input Harga Satuan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="namaKategoriSub" class="form-label fw-bold">Kategori Sub Uraian Pekerjaan</label>
                  <input type="text" readonly disabled class="form-control" id="namaKategoriSub"
                    placeholder="isi dengan nama kategori" value="SEWA TANAH">
                </div>
                <div class="mb-3">
                  <label for="subUraianPekerjaan" class="form-label fw-bold">Sub Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Sub Uraian Pekerjaan" id="subUraianPekerjaan" disabled>
                    <option>Pilih Sub Uraian Pekerjaan</option>
                    <option value="1" selected>Sewa Tanah</option>
                    <option value="2">Sewa Tanah Keras</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="satuan" class="form-label fw-bold">Satuan <sup class="text-danger">*</sup></label>
                  <!-- Default value ambil dari master Sub Uraian Pekerjaan -->
                  <input type="text" readonly disabled class="form-control" id="satuan" value="m&sup2">
                </div>
                <div class="mb-3">
                  <label for="hargaSatuan" class="form-label fw-bold">Harga Satuan <sup class="text-danger">*</sup></label>
                  <input type="number" class="form-control" id="hargaSatuan" placeholder="isi dengan harga satuan">
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
                <h1 class="modal-title fs-6" id="deleteConfirmLabel">Hapus Harga Satuan</h1>
              </div>
              <div class="modal-body">
                Anda yakin ingin menghapus data {harga}?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>

<?php include('footer.php'); ?>
