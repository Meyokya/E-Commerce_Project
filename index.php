<?php
include 'layout/header.php';
include 'layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">

    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-danger bg-gradient text-white">
        <h4 class="fw-bold mb-1">Selamat Datang di E-Commerce ☯</h4>
        <p class="mb-0 text-white-50 fs-7">Sistem Manajemen Data E-Commerce</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-3 p-3">
                <small class="text-muted fw-semibold">TOTAL MASTER DATA</small>
                <h3 class="fw-bold text-danger mb-0 mt-1">10 Modul</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-3 p-3">
                <small class="text-muted fw-semibold">STATUS SISTEM</small>
                <h3 class="fw-bold text-success mb-0 mt-1">Aktif</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-3 p-3">
                <small class="text-muted fw-semibold">PENGGUNA</small>
                <h3 class="fw-bold text-dark mb-0 mt-1">Administrator</h3>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4">
        <h6 class="fw-bold text-dark mb-3">Akses Cepat Master Data</h6>
        <div class="d-flex flex-wrap gap-2">
            <a href="master/kategori/index.php" class="btn btn-outline-danger btn-sm rounded-3">Kategori</a>
            <a href="master/produk/index.php" class="btn btn-outline-danger btn-sm rounded-3">Produk</a>
            <a href="master/merek/index.php" class="btn btn-outline-danger btn-sm rounded-3">Merek</a>
            <a href="master/satuan/index.php" class="btn btn-outline-danger btn-sm rounded-3">Satuan</a>
            <a href="master/pelanggan/index.php" class="btn btn-outline-danger btn-sm rounded-3">Pelanggan</a>
            <a href="master/alamat_pengiriman/index.php" class="btn btn-outline-danger btn-sm rounded-3">Alamat Pengiriman</a>
            <a href="master/metode_pembayaran/index.php" class="btn btn-outline-danger btn-sm rounded-3">Metode Pembayaran</a>
            <a href="master/kurir/index.php" class="btn btn-outline-danger btn-sm rounded-3">Kurir</a>
            <a href="master/promo/index.php" class="btn btn-outline-danger btn-sm rounded-3">Promo</a>
            <a href="master/pajak/index.php" class="btn btn-outline-danger btn-sm rounded-3">Pajak</a>
        </div>
    </div>

</div>

<script src="/E-Commerce_Project/assets/script.js"></script>

<?php
include 'layout/footer.php';
?>