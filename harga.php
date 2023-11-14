<?php include('header.php'); ?>

      <!-- Begin Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-5 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2">Pengaturan Harga Satuan Tahun 2023</h1>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5" data-bs-toggle="modal"
              data-bs-target="#copyData">Copy Data</button>
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
                  <col width="10%">
                  <col width="60%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">No Mata Anggaran</th>
                      <th scope="col">Nama Divisi/Kategori Uraian Pekerjaan/Nama Uraian Pekerjaan</th>
                      <th scope="col">Harga Satuan</th>
                      <th scope="col" class="text-center">Satuan</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">1</td>
                      <td class="fw-bold">UMUM</td>
                      <td></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row" class="fw-bold">1.1</td>
                      <td class="fw-bold">Mobilisasi</td>
                      <td></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addHarga" title="Tambah Uraian"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.1.(1)</td>
                      <td>Mobilisasi Perkerasan Beton</td>
                      <td class="text-end"></td>
                      <td class="text-center">LS</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHargaSub" title="Edit"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm" title="Hapus"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          onclick="location.href='harga-sub.php';"><i class="fas fa-file-alt"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.1.(2)</td>
                      <td>Mobilisasi Perkerasan Lentur</td>
                      <td class="text-end"></td>
                      <td class="text-center">LS</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHargaSub" title="Edit"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm" title="Hapus"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          onclick="location.href='harga-sub.php';"><i class="fas fa-file-alt"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row" class="fw-bold">1.2</td>
                      <td class="fw-bold">Keselamatan dan Kesehatan Kerja</td>
                      <td></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addHarga" title="Tambah Uraian"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.2.(1)</td>
                      <td>Keselamatan dan Kesehatan Kerja A</td>
                      <td class="text-end">250.000</td>
                      <td class="text-center">LS</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHarga" title="Edit"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm" title="Hapus"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.2.(2)</td>
                      <td>Keselamatan dan Kesehatan Kerja B</td>
                      <td class="text-end">250.000</td>
                      <td class="text-center">LS</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHarga" title="Edit"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm" title="Hapus"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">2</td>
                      <td class="fw-bold">DRAINASE</td>
                      <td></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row" class="fw-bold">2.1</td>
                      <td class="fw-bold">Galian</td>
                      <td></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addHarga" title="Tambah Uraian"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2.1.(1)</td>
                      <td>Galian untuk Selokan Drainase dan Saluran Air</td>
                      <td class="text-end">5.250.000</td>
                      <td class="text-center">M2</td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editHarga" title="Edit"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm" title="Hapus"><i class="fas fa-eraser"></i></button>
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
                  <label for="namaKategori" class="form-label fw-bold">Kategori Uraian Pekerjaan</label>
                  <input type="text" readonly disabled class="form-control" id="namaKategori"
                    placeholder="isi dengan nama divisi" value="Mobilisasi">
                </div>
                <div class="mb-3">
                  <label for="uraianPekerjaan" class="form-label fw-bold">Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Uraian Pekerjaan" id="uraianPekerjaan">
                    <option>Pilih Uraian Pekerjaan</option>
                    <option value="1">Mobilisasi Perkerasan Beton</option>
                    <option value="2">Mobilisasi Perkerasan Lentur</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="satuan" class="form-label fw-bold">Satuan <sup class="text-danger">*</sup></label>
                  <input type="text" readonly disabled class="form-control" id="satuan" value="LS">
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
                  <label for="namaKategori" class="form-label fw-bold">Kategori Uraian Pekerjaan</label>
                  <input type="text" readonly disabled class="form-control" id="namaKategori"
                    placeholder="isi dengan nama divisi" value="Mobilisasi">
                </div>
                <div class="mb-3">
                  <label for="uraianPekerjaan" class="form-label fw-bold">Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Uraian Pekerjaan" id="uraianPekerjaan" disabled>
                    <option>Pilih Uraian Pekerjaan</option>
                    <option value="1" selected>Mobilisasi Perkerasan Beton</option>
                    <option value="2">Mobilisasi Perkerasan Lentur</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="satuan" class="form-label fw-bold">Satuan <sup class="text-danger">*</sup></label>
                  <input type="text" readonly disabled class="form-control" id="satuan" value="LS">
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

        <!-- Modal Window to Edit Harga Sub -->
        <div class="modal fade" id="editHargaSub" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="editHargaSubLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Input Harga Satuan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="namaKategori" class="form-label fw-bold">Kategori Uraian Pekerjaan</label>
                  <input type="text" readonly disabled class="form-control" id="namaKategori"
                    placeholder="isi dengan nama divisi" value="Mobilisasi">
                </div>
                <div class="mb-3">
                  <label for="uraianPekerjaan" class="form-label fw-bold">Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Uraian Pekerjaan" id="uraianPekerjaan" disabled>
                    <option>Pilih Uraian Pekerjaan</option>
                    <option value="1" selected>Mobilisasi Perkerasan Beton</option>
                    <option value="2">Mobilisasi Perkerasan Lentur</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="satuan" class="form-label fw-bold">Satuan <sup class="text-danger">*</sup></label>
                  <input type="text" readonly disabled class="form-control" id="satuan" value="LS">
                </div>
                <div class="mb-3">
                  <label for="hargaSatuan" class="form-label fw-bold">Harga Satuan <sup class="text-danger">*</sup></label>
                  <!-- <input type="number" class="form-control" id="hargaSatuan" placeholder="isi dengan harga satuan"> -->
                  <br>
                  <button type="button" class="btn btn-info">Lihat di Sub Uraian Pekerjaan</button>
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
