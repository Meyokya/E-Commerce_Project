<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0 text-danger">Master Kategori</h4>
            <small class="text-muted">Kelola data kategori produk e-commerce</small>
        </div>
        <a href="tambah_kategori.php" class="btn btn-danger bg-gradient shadow-sm fw-semibold rounded-3 px-3 py-2">
            + Tambah Kategori
        </a>
    </div>

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
        <div class="card-header bg-danger bg-gradient text-white p-3 p-md-4 border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-0 text-uppercase">Daftar Kategori Produk</h5>
                <small class="text-white-50 fs-7">Hakurei Shrine Inventory Management</small>
            </div>
            <span class="fs-3 text-warning">☯</span>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="5%" class="text-center">No.</th>
                            <th width="15%">Kode Kategori</th>
                            <th width="20%">Nama Kategori</th>
                            <th width="15%">Kategori Induk</th>
                            <th>Deskripsi</th>
                            <th width="10%" class="text-center">Status</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="fw-semibold text-danger">KAT-001</td>
                            <td class="fw-bold">Aksesori Komputer</td>
                            <td>Elektronik</td>
                            <td>Perangkat elektronik, komponen PC, dan gadget</td>
                            <td class="text-center">
                                <span class="badge bg-success bg-opacity-10 text-success border border-success-subtle rounded-pill px-3 py-1">Aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_kategori.php?edit=KAT-001" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=KAT-001" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="fw-semibold text-danger">KAT-002</td>
                            <td class="fw-bold">Alat Masak</td>
                            <td>Rumah Tangga</td>
                            <td>Peralatan dapur dan memasak</td>
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

<?php
include '../../layout/footer.php';
?>