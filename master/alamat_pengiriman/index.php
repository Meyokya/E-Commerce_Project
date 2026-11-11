<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0 text-danger">Master Alamat Pengiriman</h4>
            <small class="text-muted">Kelola data daftar alamat pengiriman pelanggan</small>
        </div>
        <a href="tambah_ap.php" class="btn btn-danger bg-gradient shadow-sm fw-semibold rounded-3 px-3 py-2">
            + Tambah Alamat
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
                            <th>Pelanggan</th>
                            <th>Label Alamat</th>
                            <th>Nama Penerima</th>
                            <th>Nomor Telepon</th>
                            <th>Provinsi</th>
                            <th>Kota/Kabupaten</th>
                            <th>Kecamatan</th>
                            <th>Alamat Lengkap</th>
                            <th>Kode Pos</th>
                            <th class="text-center">Alamat Utama</th>
                            <th width="10%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="fw-bold">Andi Saputra</td>
                            <td><span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-2 px-2 py-1">Rumah</span></td>
                            <td>Andi Saputra</td>
                            <td>081234567890</td>
                            <td>Riau</td>
                            <td>Pekanbaru</td>
                            <td>Marpoyan Damai</td>
                            <td>Jl. Melati No. 10</td>
                            <td>28284</td>
                            <td class="text-center">
                                <span class="badge bg-success bg-opacity-10 text-success border border-success-subtle rounded-pill px-3 py-1">Ya</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_alamat_pengiriman.php?edit=1" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=1" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus alamat ini?')">Hapus</a>
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