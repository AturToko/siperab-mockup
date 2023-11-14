<?php
// Get the current page's URL
$current_page_url = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar border border-top-0 border-right col-md-3 col-lg-2 p-0 bg-transparent">
    <div class="offcanvas-md offcanvas-end bg-transparent" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel"><img src="img/logo.png" class="main-logo"
                    alt="SIPERAB Logo"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto" id="mainmenu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'index.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'index.php') ? 'page' : '';?>" href="index.php">
                        <i class="fas fa-chart-line"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'users.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'users.php') ? 'page' : '';?>" href="users.php">
                        <i class="fas fa-user"></i>
                        User/Pengguna
                    </a>
                </li>
                <li>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-2">
                        <span>Master Data</span>
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'divisi.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'divisi.php') ? 'page' : '';?>" href="divisi.php">
                        <i class="fas fa-users"></i>
                        Divisi
                    </a>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="fas fa-clipboard-list"></i>
                        Uraian Pekerjaan
                    </a>
                    <ul class="submenu collapse <?=($current_page_url == 'kategori.php' || $current_page_url == 'uraian.php' || $current_page_url == 'satuan.php' || $current_page_url == 'tags.php') ? 'show' : '';?>">
                        <li><a class="nav-link <?=($current_page_url == 'kategori.php') ? 'active' : '';?>"
                                href="kategori.php">Kategori Pekerjaan</a></li>
                        <li><a class="nav-link <?=($current_page_url == 'uraian.php') ? 'active' : '';?>"
                                href="uraian.php">Uraian Pekerjaan</a></li>
                        <li><a class="nav-link <?=($current_page_url == 'satuan.php') ? 'active' : '';?>"
                                href="satuan.php">Satuan</a></li>
                        <li><a class="nav-link <?=($current_page_url == 'tags.php') ? 'active' : '';?>"
                                href="tags.php">Tags/Jenis</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="fas fa-clipboard-list"></i>
                        Sub Uraian Pekerjaan
                    </a>
                    <ul class="submenu collapse <?=($current_page_url == 'sub-uraian.php' || $current_page_url == 'kategori-sub-uraian.php') ? 'show' : '';?>">
                        <li><a class="nav-link <?=($current_page_url == 'sub-uraian.php') ? 'active' : '';?>"
                                href="sub-uraian.php">Sub Uraian Pekerjaan</a></li>
                        <li><a class="nav-link <?=($current_page_url == 'kategori-sub-uraian.php') ? 'active' : '';?>"
                                href="kategori-sub-uraian.php">Kategori Sub Uraian</a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-2">
                        <span>Pengaturan</span>
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'tahun-anggaran.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'tahun-anggaran.php') ? 'page' : '';?>"
                        href="tahun-anggaran.php">
                        <i class="fas fa-calendar-alt"></i>
                        Tahun Anggaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'pejabat.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'pejabat.php') ? 'page' : '';?>" href="pejabat.php">
                        <i class="fas fa-user-tie"></i>
                        Pejabat
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'harga.php' || $current_page_url == 'harga-sub.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'harga.php' || $current_page_url == 'harga-sub.php') ? 'page' : '';?>" href="harga.php">
                        <i class="fas fa-money-bill"></i>
                        Harga Satuan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'log.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'log.php') ? 'page' : '';?>" href="log.php">
                        <i class="fas fa-history"></i>
                        Log Histori
                    </a>
                </li>

                <!-- Menu di bawah ini hanya ada untuk role Admin -->
                <li>
                    <hr>
                </li>
                <li>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-2">
                        <span>Master Data</span>
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'uraian-ro.php' || $current_page_url == 'uraian-sub-ro.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'uraian-ro.php' || $current_page_url == 'uraian-sub-ro.php') ? 'page' : '';?>" href="uraian-ro.php">
                        <i class="fas fa-clipboard-list"></i>
                        Uraian Pekerjaan
                    </a>
                </li>
                <li>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-2">
                        <span>Management</span>
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'rab.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'rab.php') ? 'page' : '';?>" href="rab.php">
                        <i class="fas fa-file-alt"></i>
                        RAB
                    </a>
                </li>
                <li>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-2">
                        <span>Laporan</span>
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'laporan-rab.php' || $current_page_url == 'laporan-rab-sub.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'laporan-rab.php' || $current_page_url == 'laporan-rab-sub.php') ? 'page' : '';?>" href="laporan-rab.php">
                        <i class="fas fa-clipboard-list"></i>
                        Laporan RAB
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?=($current_page_url == 'rekap-rab.php') ? 'active shadow' : '';?>"
                        aria-current="<?=($current_page_url == 'rekap-rab.php') ? 'page' : '';?>" href="rekap-rab.php">
                        <i class="fas fa-clipboard-list"></i>
                        Rekap RAB
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
