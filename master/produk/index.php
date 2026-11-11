<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0 text-danger">Master Produk</h4>
            <small class="text-muted">Kelola data daftar produk e-commerce</small>
        </div>
        <a href="tambah_produk.php" class="btn btn-danger bg-gradient shadow-sm fw-semibold rounded-3 px-3 py-2">
            + Tambah Produk
        </a>
    </div>

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
        <div class="card-header bg-danger bg-gradient text-white p-3 p-md-4 border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-0 text-uppercase">Daftar Alamat Pengiriman</h5>
                <small class="text-white-50 fs-7">Hakurei Shrine Logistics & Shipping Records</small>
            </div>
            <span class="fs-3 text-warning">☯</span>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th width="4%" class="text-center">No.</th>
                            <th>Kode Produk / SKU</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Merek</th>
                            <th>Harga Jual</th>
                            <th>Harga Modal</th>
                            <th>Stok Awal</th>
                            <th>Batas Stok Minimum</th>
                            <th>Berat (gram)</th>
                            <th>Foto Barang</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th width="10%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PRD-0001</td>
                            <td>Mouse Wireless</td>
                            <td>Aksesori Komputer</td>
                            <td>Logitech</td>
                            <td>Rp150.000</td>
                            <td>Rp95.000</td>
                            <td>25</td>
                            <td>5</td>
                            <td>250</td>
                            <td>-</td>
                            <td>Mouse wireless, koneksi USB</td>
                            <td class="text-center">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle rounded-pill px-3 py-1">Non-aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_kategori.php?edit=KAT-002" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=KAT-002" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script src="/E-Commerce_Project/assets/script.js"></script>

<?php
include '../../layout/footer.php';
?>