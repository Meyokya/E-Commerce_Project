<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0 text-danger">Master Pelanggan</h4>
            <small class="text-muted">Kelola data pelanggan e-commerce</small>
        </div>
        <a href="tambah_pelanggan.php" class="btn btn-danger bg-gradient shadow-sm fw-semibold rounded-3 px-3 py-2">
            + Tambah Pelanggan
        </a>
    </div>

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
        <div class="card-header bg-danger bg-gradient text-white p-3 p-md-4 border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-0 text-uppercase">Daftar Pelanggan</h5>
                <small class="text-white-50 fs-7">Hakurei Shrine Customer Registry</small>
            </div>
            <span class="fs-3 text-warning">☯</span>
        </div>
        
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th width="4%" class="text-center">No.</th>
                            <th>Kode Pelanggan</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat Utama</th>
                            <th class="text-center">Status</th>
                            <th width="10%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="fw-semibold text-danger">PLG-001</td>
                            <td class="fw-bold">Andi Saputra</td>
                            <td>andi@gmail.com</td>
                            <td>081234567890</td>
                            <td>Jl. Sudirman No. 45, Pekanbaru</td>
                            <td class="text-center">
                                <span class="badge bg-success bg-opacity-10 text-success border border-success-subtle rounded-pill px-3 py-1">Aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_pelanggan.php?edit=PLG-001" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=PLG-001" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus pelanggan ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="fw-semibold text-danger">PLG-002</td>
                            <td class="fw-bold">Budi Santoso</td>
                            <td>budi@gmail.com</td>
                            <td>089876543210</td>
                            <td>Jl. Ahmad Yani No. 12, Pekanbaru</td>
                            <td class="text-center">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle rounded-pill px-3 py-1">Non-aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_pelanggan.php?edit=PLG-002" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=PLG-002" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus pelanggan ini?')">Hapus</a>
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