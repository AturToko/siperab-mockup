<?php include('header.php'); ?>

      <!-- Begin Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-5 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2">Master Kategori Uraian Pekerjaan Tahun 2023</h1>
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
                  <col width="25%">
                  <col width="10%">
                  <col width="15%">
                  <col width="15%">
                  <col width="15%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">No Mata Anggaran</th>
                      <th scope="col">Nama Divisi/Kategori Uraian Pekerjaan/Nama Uraian Pekerjaan</th>
                      <th scope="col">Satuan</th>
                      <th scope="col">Tags/Jenis</th>
                      <th scope="col">Rumus Volume</th>
                      <th scope="col" class="text-end">Harga Satuan</th>
                      <th scope="col" class="text-center">Sub</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">1</td>
                      <td class="fw-bold">UMUM</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="text-center">
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row" class="fw-bold">1.1</td>
                      <td class="fw-bold">Mobilisasi</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="text-center">
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.1.(1)</td>
                      <td>Mobilisasi Perkerasan Beton</td>
                      <td>LS</td>
                      <td>Bongkar, Non Bongkar</td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="text-center">
                        Ya&nbsp;
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          onclick="location.href='uraian-sub-ro.php';"><i class="fas fa-clipboard-list"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.1.(2)</td>
                      <td>Mobilisasi Perkerasan Lentur</td>
                      <td>LS</td>
                      <td>Bongkar</td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="text-center">
                        Ya&nbsp;
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          onclick="location.href='uraian-sub-ro.php';"><i class="fas fa-clipboard-list"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row" class="fw-bold">1.2</td>
                      <td class="fw-bold">Keselamatan dan Kesehatan Kerja</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="text-center">
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.2.(1)</td>
                      <td>Keselamatan dan Kesehatan Kerja A</td>
                      <td>LS</td>
                      <td>Bongkar, Non Bongkar</td>
                      <td></td>
                      <td class="text-end">320.000.000,00</td>
                      <td class="text-center">
                        Tidak
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.2.(2)</td>
                      <td>Keselamatan dan Kesehatan Kerja B</td>
                      <td>LS</td>
                      <td>Bongkar, Non Bongkar</td>
                      <td></td>
                      <td class="text-end">1.320.000.000,00</td>
                      <td class="text-center">
                        Tidak
                      </td>
                    </tr>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">2</td>
                      <td class="fw-bold">DRAINASE</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="text-center">
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row" class="fw-bold">2.1</td>
                      <td class="fw-bold">Galian</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="text-center">
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2.1.(1)</td>
                      <td>Galian untuk Selokan Drainase dan Saluran Air</td>
                      <td>m&sup2;</td>
                      <td>Bongkar, Non Bongkar</td>
                      <td>Rumus 1</td>
                      <td class="text-end">1.320.000.000,00</td>
                      <td class="text-center">
                        Tidak
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal Window to Create or Edit Kategori -->
        <div class="modal fade" id="addUraian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addUraianLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Entri/Edit Data Kategori Uraian Pekerjaan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="namaDivisi" class="form-label fw-bold">Nama Divisi</label>
                  <input type="text" readonly disabled class="form-control" id="namaDivisi"
                    placeholder="isi dengan nama divisi" value="1. UMUM">
                </div>
                <div class="mb-3">
                  <label for="namaKategori" class="form-label fw-bold">Kategori Uraian Pekerjaan</label>
                  <input type="text" readonly disabled class="form-control" id="namaKategori"
                    placeholder="isi dengan nama divisi" value="1.1 Mobilisasi">
                </div>
                <div class="mb-3">
                  <label for="nomor" class="form-label fw-bold">Nomor <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="nomor" placeholder="isi dengan nomor">
                </div>
                <div class="mb-3">
                  <label for="uraianPekerjaan" class="form-label fw-bold">Nama Uraian Pekerjaan <sup
                      class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="uraianPekerjaan"
                    placeholder="isi dengan nama kategori uraian pekerjaan">
                </div>
                <div class="mb-3">
                  <label for="satuan" class="form-label fw-bold">Satuan <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Satuan" id="satuan">
                    <option>Pilih Satuan</option>
                    <option value="ls">LS</option>
                    <option value="m2">M2</option>
                    <option value="m3">M3</option>
                    <option value="km">Km</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="tags" class="form-label fw-bold">Tags/Jenis <sup class="text-danger">*</sup></label>
                  <select class="form-select" data-placeholder="Pilih Tags/Jenis" id="tags" multiple>
                    <option></option>
                    <option value="bongkar">Bongkar</option>
                    <option value="non-bongkar">Non Bongkar</option>
                    <option value="semi-bongkar">Semi Bongkar</option>
                    <option value="setengah-bongkar">Setengah Bongkar</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="subUraian" class="form-label">Sub <sup class="text-danger">*</sup></label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="subUraian" id="ya" value="ya" checked>
                    <label class="form-check-label" for="ya">Ya</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="subUraian" id="tidak" value="tidak">
                    <label class="form-check-label" for="tidak">Tidak</label>
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
