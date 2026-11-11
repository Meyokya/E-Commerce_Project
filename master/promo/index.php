<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-0 text-danger">Master Promo / Voucher</h4>
            <small class="text-muted">Kelola data kode promo dan diskon e-commerce</small>
        </div>
        <a href="tambah_promo.php" class="btn btn-danger bg-gradient shadow-sm fw-semibold rounded-3 px-3 py-2">
            + Tambah Promo
        </a>
    </div>

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
        <div class="card-header bg-danger bg-gradient text-white p-3 p-md-4 border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-0 text-uppercase">Daftar Voucher & Promo</h5>
                <small class="text-white-50 fs-7">Hakurei Shrine Discount & Voucher System</small>
            </div>
            <span class="fs-3 text-warning">☯</span>
        </div>
        
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0 text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th width="4%" class="text-center">No.</th>
                            <th>Kode Promo</th>
                            <th>Nama Promo</th>
                            <th>Jenis Diskon</th>
                            <th>Nilai Diskon</th>
                            <th>Min. Belanja</th>
                            <th>Maks. Diskon</th>
                            <th>Periode Promo</th>
                            <th>Kuota</th>
                            <th class="text-center">Status</th>
                            <th width="10%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="fw-semibold text-danger">PROMO-HAKUREI</td>
                            <td class="fw-bold">Diskon Awal Tahun</td>
                            <td><span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-2 px-2 py-1">Persentase</span></td>
                            <td>10%</td>
                            <td>Rp 100.000</td>
                            <td>Rp 50.000</td>
                            <td>01/01/2026 - 31/01/2026</td>
                            <td>100</td>
                            <td class="text-center">
                                <span class="badge bg-success bg-opacity-10 text-success border border-success-subtle rounded-pill px-3 py-1">Aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_promo.php?edit=PROMO-HAKUREI" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=PROMO-HAKUREI" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus promo ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="fw-semibold text-danger">PROMO-HEMAT</td>
                            <td class="fw-bold">Potongan Rp 20rb</td>
                            <td><span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-2 px-2 py-1">Normal</span></td>
                            <td>Rp 20.000</td>
                            <td>Rp 50.000</td>
                            <td>Rp 20.000</td>
                            <td>01/02/2026 - 28/02/2026</td>
                            <td>50</td>
                            <td class="text-center">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary-subtle rounded-pill px-3 py-1">Non-aktif</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="tambah_promo.php?edit=PROMO-HEMAT" class="btn btn-outline-primary">Edit</a>
                                    <a href="hapus.php?id=PROMO-HEMAT" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus promo ini?')">Hapus</a>
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