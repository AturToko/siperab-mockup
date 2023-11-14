<?php include 'header.php';?>

      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-3 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2 flex-fill"><a href="detail-rab.php" title="Kembali"><i class="fas fa-caret-left text-secondary"></i></a> Mobilisasi Perkerasan Beton</h1>
          </div>

          <div class="d-flex justify-content-between mb-3">
            <h1 class="h4 flex-fill">Data Survey Peningkatan Kualitas Jalan</h1>
          </div>

          <div class="container-fluid mb-5">
            <div class="row">
              <div class="table-responsive m-0 p-0">
                <table class="table table-hover" style="font-size: 14px;">
                  <col width="5%">
                  <col width="35%">
                  <col width="15%">
                  <col width="15%">
                  <col width="15%">
                  <col width="15%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">STA</th>
                      <th scope="col">Panjang</th>
                      <th scope="col">Lebar</th>
                      <th scope="col">Tebal</th>
                      <th scope="col">Luas</th>
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
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2</td>
                      <td>0+100 - 0+200</td>
                      <td>100</td>
                      <td>5.00</td>
                      <td>0.25</td>
                      <td>125 m<sup>2</sup></td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">3</td>
                      <td>0+200 - 0+300</td>
                      <td>100</td>
                      <td>5.00</td>
                      <td>0.25</td>
                      <td>125 m<sup>2</sup></td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">4</td>
                      <td>0+300 - 0+400</td>
                      <td>100</td>
                      <td>5.00</td>
                      <td>0.25</td>
                      <td>125 m<sup>2</sup></td>
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
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between mb-3">
            <!-- Ambil nama Uraian Pekerjaan yang sedang dilihat -->
            <h1 class="h4 flex-fill">Rincian Pekerjaan Mobilisasi Perkerasan Beton</h1>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="table-responsive m-0 p-0">
              <table class="table table-hover" style="font-size: 14px;">
                  <col width="10%">
                  <col width="40%">
                  <col width="15%">
                  <col width="15%">
                  <col width="10%">
                  <col width="10%">
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">No Mata Anggaran</th>
                      <th scope="col">Kategori Sub Uraian Pekerjaan/Nama Sub Uraian Pekerjaan</th>
                      <th scope="col" class="text-end">Perkiraan Volume</th>
                      <th scope="col" class="text-end">Harga Satuan (Rp)</th>
                      <th scope="col" class="text-end">Jumlah (Rp)</th>
                      <th scope="col" class="text-center">Status</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">A</td>
                      <td class="fw-bold">SEWA TANAH</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Sewa Tanah</td>
                      <td class="text-end">120 m&sup2;</td>
                      <td class="text-end">3.000.000,00</td>
                      <td class="text-end">360.000.000,00</td>
                      <td class="text-center"><i class="fas fa-check-circle text-success fa-2x"></i></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editVolume"><i class="fas fa-edit"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2</td>
                      <td>Sewa Tanah Keras</td>
                      <td class="text-end">1 m&sup2;</td>
                      <td class="text-end">14.160.102,00</td>
                      <td class="text-end">14.160.102,00</td>
                      <td class="text-center"><i class="fas fa-check-circle text-success fa-2x"></i></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editVolume"><i class="fas fa-edit"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">B</td>
                      <td class="fw-bold">PERALATAN</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Asphalt Mixing Plant 150 HP</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editVolume"><i class="fas fa-edit"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg table-secondary">
                      <td scope="row" class="fw-bold">C</td>
                      <td class="fw-bold">KANTOR LAPANGAN DAN FASILITAS</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Base Camp</td>
                      <td class="text-end">2 Bulan</td>
                      <td class="text-end">2.000.000,00</td>
                      <td class="text-end">4.000.000,00</td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editVolume"><i class="fas fa-edit"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2</td>
                      <td>Gudang dan Lain-lain</td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-end"></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#editVolume"><i class="fas fa-edit"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal Window to Create or Edit Data Survey -->
        <div class="modal fade" id="editVolume" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="editVolumeLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Input RAB Detail Sub Uraian Pekerjaan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="namaSubUraian" class="form-label fw-bold">Nama Sub Uraian Pekerjaan <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="namaSubUraian" placeholder="isi dengan nama sub uraian pekerjaan" value="Base Camp" readonly disabled>
                </div>
                <div class="mb-3">
                  <!-- Berikan satuan volume pekerjaan berdasarkan satuan yang digunakan di master data -->
                  <label for="volume" class="form-label fw-bold">Perkiraan Volume (bulan)<!-- satuan di dalamnya bisa berubah sesuai satuan di master data--> <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="volume" placeholder="isi dengan perkiraan volume" value="2">
                </div>
                <div class="mb-3">
                  <label for="hargaSatuan" class="form-label fw-bold">Harga Satuan <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="hargaSatuan" value="2.000.000,00" readonly disabled><!-- Harga Satuan dari master data sesuai komponen sub uraian terpilih --> 
                </div>
                <div class="mb-3">
                  <label for="jumlah" class="form-label fw-bold">Jumlah <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="jumlah" value="4.000.000,00" readonly disabled><!-- Jumlah ini hasil perkalian volume * hargaSatuan --> 
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
