<?php include('header.php'); ?>


      <main class="col-md-9 ms-sm-auto col-lg-10 mt-2 mb-5 position-relative h-100">
        <div class="d-flex justify-content-between flex-column flex-wrap flex-md-nowrap p-3 mb-3 shadow rounded-4">
          <div class="d-flex justify-content-between mb-3">
            <h1 class="h2">Data User/Pengguna</h1>
            <button class="btn btn-sm main-gradient rounded-3 text-white px-5" data-bs-toggle="modal"
              data-bs-target="#addUser">Tambah Data</button>
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
                  <thead class="table-dark rounded fs-6">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Pengguna</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Level</th>
                      <th scope="col">Last Login</th>
                      <th scope="col" class="text-center">Status</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="lh-lg">
                      <td scope="row">1</td>
                      <td>Agustian Lukman Hakim</td>
                      <td>agustian@gmail.com</td>
                      <td>+62891011121314</td>
                      <td>Superadmin</td>
                      <td>01-10-2023 10.10</td>
                      <td class="text-center">
                        <h5><span class="badge bg-success-subtle text-success rounded-pill fw-medium">Aktif</span></h5>
                      </td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addUser"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">2</td>
                      <td>Erlina Idola Handoyo</td>
                      <td>erlin123@gmail.com</td>
                      <td>+62888888888888</td>
                      <td>Admin</td>
                      <td>02-10-2023 12.34</td>
                      <td class="text-center">
                        <h5><span class="badge bg-success-subtle text-success rounded-pill fw-medium">Aktif</span></h5>
                      </td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addUser"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">3</td>
                      <td>Nasrudin Muhamad, S.E.</td>
                      <td>nasrudin79@gmail.com</td>
                      <td>+628787876543</td>
                      <td>Admin</td>
                      <td>03-10-2023 17.00</td>
                      <td class="text-center">
                        <h5><span class="badge bg-success-subtle text-success rounded-pill fw-medium">Aktif</span></h5>
                      </td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addUser"><i class="fas fa-edit"></i></button>
                        <button class="btn rounded-3 bg-danger text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#deleteConfirm"><i class="fas fa-eraser"></i></button>
                      </td>
                    </tr>
                    <tr class="lh-lg">
                      <td scope="row">4</td>
                      <td>Soca A</td>
                      <td>socaa1234@gmail.com</td>
                      <td>+628124578936</td>
                      <td>Pimpinan</td>
                      <td>04-10-2023 13.13</td>
                      <td class="text-center">
                        <h5><span class="badge bg-danger-subtle text-danger rounded-pill fw-medium">Tidak Aktif</span></h5>
                      </td>
                      <td class="text-center">
                        <button class="btn rounded-3 bg-success text-white text-sm action-button fs-6 p-2"
                          data-bs-toggle="modal" data-bs-target="#addUser"><i class="fas fa-edit"></i></button>
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

        <!-- Modal Window to Create or Edit User -->
        <div class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="addUserLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header main-gradient text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Entri/Edit Data Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="namaPengguna" class="form-label">Nama Pengguna <sup class="text-danger">*</sup></label>
                  <input type="text" class="form-control" id="namaPengguna" placeholder="isi dengan nama pengguna">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>
                  <input type="email" class="form-control" id="email" placeholder="isi dengan email pengguna">
                </div>
                <div class="mb-3">
                  <label for="level" class="form-label">Level <sup class="text-danger">*</sup></label>
                  <select class="form-select" id="level" aria-label="levelAccess">
                    <option selected>-- Pilih level akses --</option>
                    <option value="1">Admin</option>
                    <option value="2">Pimpinan</option>
                    <option value="3">Superadmin</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password <sup class="text-danger">*</sup></label>
                  <input type="password" class="form-control" id="password" placeholder="isi dengan password">
                </div>
                <div class="mb-3">
                  <label for="confirmPassword" class="form-label">Konfirmasi Password <sup class="text-danger">*</sup></label>
                  <input type="password" class="form-control" id="confirmPassword"
                    placeholder="isi dengan konfirmasi password">
                </div>
                <div class="mb-3">
                  <label for="profilePicture" class="form-label">Profile Picture</label>
                  <input class="form-control" type="file" id="profilePicture" accept="image/*">
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
                <h1 class="modal-title fs-6" id="deleteConfirmLabel">Hapus User</h1>
              </div>
              <div class="modal-body">
                Anda yakin ingin menghapus data {nama_user}?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>

<?php include('footer.php'); ?>
