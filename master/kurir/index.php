<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0 text-danger">Master Kurir / Pengiriman</h4>
            <small class="text-muted">Kelola data kurir dan jasa pengiriman e-commerce</small>
        </div>
        <a href="tambah_kurir.php" class="btn btn-danger bg-gradient shadow-sm fw-semibold rounded-3 px-3 py-2">
            + Tambah Kurir
        </a>
    </div>

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
        <div class="card-header bg-danger bg-gradient text-white p-3 p-md-4 border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-0 text-uppercase">Daftar Kurir / Pengiriman</h5>
                <small class="text-white-50 fs-7">Hakurei Shrine Courier Management</small>
            </div>
            <span class="fs-3 text-warning">☯</span>
        </div>
        
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th width="4%" class="text-center">No.</th>
                            <th>Kode Kurir</th>
                            <th>Nama Kurir</th>
                            <th>Layanan</th>
                            <th>Kontak / Situs</th>
                            <th class="text-center">Status</th>
                            <th width="10%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="fw-semibold text-danger">KRR-001</td>
                            <td class="fw-bold">J&T Express</td>
                            <td><span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-2 px-2 py-1">EZ, ECO, Super</span></td>
                            <td>https://jet.co.id</td>
                            <td class="text-center">
                                <span class="badge bg-success bg-opacity-10 text-success border border-success-subtle rounded-pill px-3 py-1">Aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_kurir.php?edit=KRR-001" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=KRR-001" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus kurir ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="fw-semibold text-danger">KRR-002</td>
                            <td class="fw-bold">JNE Express</td>
                            <td><span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-2 px-2 py-1">REG, YES, OKE</span></td>
                            <td>https://jne.co.id</td>
                            <td class="text-center">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle rounded-pill px-3 py-1">Non-aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_kurir.php?edit=KRR-002" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=KRR-002" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus kurir ini?')">Hapus</a>
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