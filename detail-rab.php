<?php include 'header.php';?>

      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-3 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2 flex-fill">Detail Rencana Anggaran Biaya (RAB)</h1>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5 me-3"><i class="fas fa-file-pdf"></i> Export PDF</button>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5"><i class="fas fa-file-excel"></i> Export Excel</button>
          </div>

          <div class="container-fluid bg-body-secondary p-3 mb-3 rounded">
            <div class="row">
              <div class="col col-md-3">
                <dl>
                  <dt>Kegiatan</dt>
                  <dd>Peningkatan Jl. Curug Kulon - Cukang Galih - Ciakar Kaler</dd>
                </dl>
              </div>
              <div class="col col-md-3">
                <dl>
                  <dt>Pekerjaan</dt>
                  <dd>Rehabilitasi Jl. Legok - Pagedangan</dd>
                </dl>
              </div>
              <div class="col">
                <dl>
                  <dt>Kode Ruas</dt>
                  <dd>7</dd>
                </dl>
              </div>
              <div class="col">
                <dl>
                  <dt>Kecamatan</dt>
                  <dd>Curug</dd>
                </dl>
              </div>
              <div class="col">
                <dl>
                  <dt>Tanggal</dt>
                  <dd>13-11-2023</dd>
                </dl>
              </div>
              <div class="col">
                <dl>
                  <dt>Status</dt>
                  <dd>
                    <!-- Opsi yang tampil jika status Draft atau Final, silakan dipilih -->
                    <h5><span class="badge bg-secondary-subtle text-secondary rounded-pill fw-medium">Draft</span></h5>
                    <h5><span class="badge bg-success-subtle text-success rounded-pill fw-medium">Final</span></h5>
                  </dd>
                </dl>
              </div>
            </div>
            <div class="row">
              <div class="col col-md-3">
                <dl>
                  <dt>Pagu Anggaran</dt>
                  <dd>18.000.000.000</dd>
                </dl>
              </div>
              <div class="col col-md-3">
                <dl>
                  <dt>Dibuat Oleh</dt>
                  <dd>Audhi</dd>
                </dl>
              </div>
              <div class="col">
                <dl>
                  <dt>PPN</dt>
                  <dd>11%</dd>
                </dl>
              </div>
              <div class="col">
              </div>
              <div class="col">
              </div>
              <div class="col">
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2 flex-fill">Data Survey Peningkatan Kualitas Jalan</h1>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5 me-3" data-bs-toggle="modal" data-bs-target="#sultan">Integrasi dari Sultan</button>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5" data-bs-toggle="modal" data-bs-target="#addData">Tambah Data</button>
          </div>

          <div class="container-fluid mb-5">
            <div class="row">
              <div class="table-responsive m-0 p-0">
                <table class="table table-hover" style="font-size: 14px;">
                  <col width="5%">
                  <col width="25%">
                  <col width="15%">
                  <col width="15%">
                  <col width="15%">
                  <col width="15%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">STA</th>
                      <th scope="col">Panjang</th>
                      <th scope="col">Lebar</th>
                      <th scope="col">Tebal</th>
                      <th scope="col">Luas</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>0+000 - 0+100</td>
                      <td>100</td>
                      <td>5.00</td>
                      <td>0.25</td>
                      <td>125 m<sup>2</sup></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addData"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2</td>
                      <td>0+100 - 0+200</td>
                      <td>100</td>
                      <td>5.00</td>
                      <td>0.25</td>
                      <td>125 m<sup>2</sup></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addData"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">3</td>
                      <td>0+200 - 0+300</td>
                      <td>100</td>
                      <td>5.00</td>
                      <td>0.25</td>
                      <td>125 m<sup>2</sup></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addData"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">4</td>
                      <td>0+300 - 0+400</td>
                      <td>100</td>
                      <td>5.00</td>
                      <td>0.25</td>
                      <td>125 m<sup>2</sup></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addData"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="fw-bold">Jumlah</td>
                      <td class="fw-bold">500 m<sup>2</sup></td>
                      <td></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between mb-5">
            <h1 class="h2"></h1>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5 lh-lg">Generate RAB</button>
          </div>

          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2 flex-fill">Rincian Item Rencana Anggaran Belanja (RAB)</h1>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5" data-bs-toggle="modal" data-bs-target="#addDivisi">Tambah Divisi</button>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="table-responsive m-0 p-0">
                <table class="table table-hover" style="font-size: 14px;">
                  <col width="10%">
                  <col width="30%">
                  <col width="15%">
                  <col width="15%">
                  <col width="15%">
                  <col width="5%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">No Mata Pembayaran</th>
                      <th scope="col">Nama Divisi/Kategori Uraian Pekerjaan/Nama Uraian Pekerjaan</th>
                      <th scope="col" class="text-end">Perkiraan Volume</th>
                      <th scope="col" class="text-end">Harga Satuan (Rp)</th>
                      <th scope="col" class="text-end">Jumlah (Rp)</th>
                      <th scope="col" class="text-center">Status</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">1</td>
                      <td class="fw-bold">UMUM</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addKategori"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row" class="fw-bold">1.1</td>
                      <td class="fw-bold">Mobilisasi</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-center"><i class="fas fa-check-circle text-success fa-2x"></i></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addUraian"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.1.(1)</td>
                      <td>Mobilisasi Perkerasan Beton</td>
                      <td class="text-end">1,00 LS</td>
                      <td class="text-end">14,000,000.00</td>
                      <td class="text-end">14,000,000.00</td>
                      <td class="text-center"><i class="fas fa-check-circle text-success fa-2x"></i></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#detailHitung"><i class="fas fa-edit" title="Lihat Detail"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2" title="Ada Sub"><i class="fas fa-file-alt"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.1.(2)</td>
                      <td>Mobilisasi Perkerasan Lentur</td>
                      <td class="text-end">1,00 LS</td>
                      <td class="text-end">600,000.00</td>
                      <td class="text-end">600,000.00</td>
                      <td class="text-center"><i class="fas fa-check-circle text-success fa-2x"></i></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#detailHitung"><i class="fas fa-edit" title="Lihat Detail"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2" title="Ada Sub"><i class="fas fa-file-alt"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row" class="fw-bold">1.2</td>
                      <td class="fw-bold">Keselamatan dan Kesehatan Kerja</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addUraian"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1.2.(1)</td>
                      <td>Keselamatan dan Kesehatan Kerja A</td>
                      <td class="text-end">1,00 LS</td>
                      <td class="text-end">160.000,00</td>
                      <td class="text-end">160.000,00</td>
                      <td></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#detailHitung"><i class="fas fa-edit" title="Lihat Detail"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2" title="Ada Sub"><i class="fas fa-file-alt"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row"></td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="fw-bold text-end">Sub Total</td>
                      <td class="fw-bold text-end">14.760.000,00</td>
                      <td></td>
                      <td class="text-center">
                      </td>
                    </tr>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">2</td>
                      <td class="fw-bold">DRAINASE</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addKategori"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row" class="fw-bold">2.1</td>
                      <td class="fw-bold">Galian</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                        <button class="btn rounded-3 bg-info text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addUraian"><i class="fas fa-plus"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2.1.(1)</td>
                      <td>Galian untuk Selokan Drainase dan Saluran Air</td>
                      <td class="text-end">200 m<sup>3</sup></td>
                      <td class="text-end">634.967,00</td>
                      <td class="text-end">126.993.400,00</td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#detailHitung"><i class="fas fa-edit" title="Lihat Detail"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row"></td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="fw-bold text-end">Sub Total</td>
                      <td class="fw-bold text-end">126.993.400,00</td>
                      <td></td>
                      <td class="text-center">
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row"></td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="fw-bold text-end">PPN (11%)</td>
                      <td class="fw-bold text-end">15.592.874,00</td>
                      <td></td>
                      <td class="text-center">
                      </td>
                    </tr>
                    <tr class="lh-lg table-secondary">
                      <td scope="row"></td>
                      <td></td>
                      <td class="text-end"></td>
                      <td class="fw-bold text-end">Total</td>
                      <td class="fw-bold text-end">157.346.274,00</td>
                      <td></td>
                      <td class="text-center">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal Window to Create or Edit Data Survey -->
        <div class="modal fade" id="addData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addData" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Entri Data Survey Jalan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-3">
                        <label for="pilihSTA" class="form-label fw-bold">Pilih STA <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="pilihSTA" placeholder="pilih STA">
                        <!-- Masih kurang jelas karena di label adalah Pilih, tapi bentuk form input text -->
                        <!-- <select class="form-select" name="namaKegiatan" id="namaKegiatan">
                          <option value="A">Kegiatan A</option>
                          <option value="B">Kegiatan B</option>
                          <option value="C">Kegiatan C</option>
                          <option value="D">Kegiatan D</option>
                        </select> -->
                      </div>
                      <div class="mb-3">
                        <label for="panjang" class="form-label fw-bold">Panjang <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="panjang" placeholder="isi dengan panjang" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="lebar" class="form-label fw-bold">Lebar <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="lebar" placeholder="isi dengan lebar">
                      </div>
                      <div class="mb-3">
                        <label for="tebal" class="form-label fw-bold">Tebal <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="tebal" placeholder="isi dengan tebal">
                      </div>
                      <div class="mb-3">
                        <label for="luas" class="form-label fw-bold">Luas</label>
                        <input type="text" class="form-control" id="luas" placeholder="isi panjang, lebar, dan tebal" disabled readonly>
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

        <!-- Modal for adding Uraian -->
        <div class="modal fade" id="addUraian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addUraianLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Uraian Pekerjaan</h1>
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
                  <label for="uraianPekerjaan" class="form-label fw-bold">Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Uraian Pekerjaan" id="uraianPekerjaan">
                    <option>Pilih Uraian Pekerjaan</option>
                    <option value="A" disabled>Mobilisasi Perkerasan Beton</option>
                    <option value="B">Mobilisasi Perkerasan Lentur</option>
                  </select>
                  <!-- Jika uraian sudah digunakan di dalam RAB, maka dibuat supaya tidak bisa dipilih kembali, misalkan dibuat disabled pada option atau diberikan notifikasi saat dipilih -->
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for adding Kategori Uraian Pekerjaan -->
        <div class="modal fade" id="addKategori" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addKategoriLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kategori Uraian Pekerjaan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="namaDivisi" class="form-label fw-bold">Nama Divisi</label>
                  <input type="text" readonly disabled class="form-control" id="namaDivisi"
                    placeholder="isi dengan nama divisi" value="1. UMUM">
                </div>
                <div class="mb-3">
                  <label for="kategoriUraian" class="form-label fw-bold">Kategori Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Kategori Uraian Pekerjaan" id="kategoriUraian">
                    <option>Pilih Kategori Uraian Pekerjaan</option>
                    <option value="A" disabled>Mobilisasi</option>
                    <option value="B">Keselamatan dan Kesehatan Kerja</option>
                  </select>
                  <!-- Jika kategori sudah digunakan di dalam RAB, maka dibuat supaya tidak bisa dipilih kembali, misalkan dibuat disabled pada option atau diberikan notifikasi saat dipilih -->
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for adding Divisi -->
        <div class="modal fade" id="addDivisi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addDivisiLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Divisi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="divisi" class="form-label fw-bold">Divisi <sup class="text-danger">*</sup></label>
                  <select class="form-select" placeholder="Pilih Divisi" id="divisi">
                    <option>Pilih Divisi</option>
                    <option value="A" disabled>1 UMUM</option>
                    <option value="B">2 DRAINASE</option>
                  </select>
                  <!-- Jika divisi sudah digunakan di dalam RAB, maka dibuat supaya tidak bisa dipilih kembali, misalkan dibuat disabled pada option atau diberikan notifikasi saat dipilih -->
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for detail perhitungan -->
        <div class="modal modal-xl fade" id="detailHitung" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="detailHitungLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Perhitungan [nama_uraian_pekerjaan]</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="table-responsive m-0 p-0">
                  <table class="table table-hover" style="font-size: 14px;">
                    <col width="20%">
                    <col width="15%">
                    <col width="15%">
                    <col width="15%">
                    <col width="15%">
                    <col width="15%">
                    <thead class="table-dark rounded fs-6">
                      <tr>
                        <th scope="col">STA</th>
                        <th scope="col" class="text-end">Panjang</th>
                        <th scope="col" class="text-end">Lebar</th>
                        <th scope="col" class="text-end">Tinggi</th>
                        <th scope="col" class="text-end">Jumlah Sisi</th>
                        <th scope="col" class="text-end">Volume</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="lh-lg">
                        <td class="text-center">1</td>
                        <td class="text-center">2</td>
                        <td class="text-center">3</td>
                        <td class="text-center">4</td>
                        <td class="text-center">5</td>
                        <td class="text-center">(2*3*4)*5</td>
                      </tr>
                      <tr class="lh-lg">
                        <td>0+000 - 0+100</td>
                        <td><input type="number" class="form-control text-end" id="panjang-1" value="100"></td>
                        <td><input type="number" class="form-control text-end" id="lebar-1" value="0.5"></td>
                        <td><input type="number" class="form-control text-end" id="tinggi-1" value="0.5"></td>
                        <td><input type="number" class="form-control text-end" id="sisi-1" value="2"></td>
                        <td><input type="number" class="form-control text-end" id="volume-1" value="50" readonly></td>
                      </tr>
                      <tr class="lh-lg">
                        <td>0+100 - 0+200</td>
                        <td><input type="number" class="form-control text-end" id="panjang-2" value="100"></td>
                        <td><input type="number" class="form-control text-end" id="lebar-2" value="0.5"></td>
                        <td><input type="number" class="form-control text-end" id="tinggi-2" value="0.5"></td>
                        <td><input type="number" class="form-control text-end" id="sisi-2" value="2"></td>
                        <td><input type="number" class="form-control text-end" id="volume-2" value="50" readonly></td>
                      </tr>
                      <tr class="lh-lg">
                        <td>0+200 - 0+300</td>
                        <td><input type="number" class="form-control text-end" id="panjang-3" value="100"></td>
                        <td><input type="number" class="form-control text-end" id="lebar-3" value="0.5"></td>
                        <td><input type="number" class="form-control text-end" id="tinggi-3" value="0.5"></td>
                        <td><input type="number" class="form-control text-end" id="sisi-3" value="2"></td>
                        <td><input type="number" class="form-control text-end" id="volume-3" value="50" readonly></td>
                      </tr>
                      <tr class="lh-lg">
                        <td>0+300 - 0+400</td>
                        <td><input type="number" class="form-control text-end" id="panjang-4" value="100"></td>
                        <td><input type="number" class="form-control text-end" id="lebar-4" value="0.5"></td>
                        <td><input type="number" class="form-control text-end" id="tinggi-4" value="0.5"></td>
                        <td><input type="number" class="form-control text-end" id="sisi-4" value="2"></td>
                        <td><input type="number" class="form-control text-end" id="volume-4" value="50" readonly></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="fw-bold text-end">Jumlah</td>
                        <td class="fw-bold text-end">200,00</td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="mb-3">
                    <label for="statusCek" class="form-label">Status Cek <sup class="text-danger">*</sup></label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="statusCek" id="final" value="final" checked>
                      <label class="form-check-label" for="final">Final</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="statusCek" id="draft" value="draft">
                      <label class="form-check-label" for="draft">Draft</label>
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

<?php include 'footer.php';?>
