<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0 text-danger">Master Merek</h4>
            <small class="text-muted">Kelola data merek produk e-commerce</small>
        </div>
        <a href="tambah_merek.php" class="btn btn-danger bg-gradient shadow-sm fw-semibold rounded-3 px-3 py-2">
            + Tambah Merek
        </a>
    </div>

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
        <div class="card-header bg-danger bg-gradient text-white p-3 p-md-4 border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-0 text-uppercase">Daftar Merek Produk</h5>
                <small class="text-white-50 fs-7">Hakurei Shrine Brand Registry</small>
            </div>
            <span class="fs-3 text-warning">☯</span>
        </div>
        
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="5%" class="text-center">No.</th>
                            <th width="15%">Kode Merek</th>
                            <th width="25%">Nama Merek</th>
                            <th>Keterangan</th>
                            <th width="12%" class="text-center">Status</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="fw-semibold text-danger">MRK-001</td>
                            <td class="fw-bold">Logitech</td>
                            <td>Produsen periferal komputer dan aksesoris</td>
                            <td class="text-center">
                                <span class="badge bg-success bg-opacity-10 text-success border border-success-subtle rounded-pill px-3 py-1">Aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_merek.php?edit=MRK-001" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=MRK-001" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus merek ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="fw-semibold text-danger">MRK-002</td>
                            <td class="fw-bold">Asus</td>
                            <td>Perangkat keras dan komponen laptop/PC</td>
                            <td class="text-center">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle rounded-pill px-3 py-1">Non-aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_merek.php?edit=MRK-002" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=MRK-002" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus merek ini?')">Hapus</a>
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