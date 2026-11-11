<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">
    
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">
        
        <div class="card-header bg-danger bg-gradient text-white p-3 p-md-4 border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-0 text-uppercase">FORM MASTER PAJAK</h5>
                <small class="text-white-50 fs-7">Tambah / Edit Data Pajak</small>
            </div>
            <span class="fs-2 opacity-50 text-warning">☯</span>
        </div>
        
        <div class="card-body p-4 bg-light bg-opacity-25">
            <form id="MasterForm" action="proses.php" method="POST">
                
                <div class="alert alert-danger border-0 bg-danger bg-opacity-10 text-danger rounded-3 mb-4 p-3 d-flex align-items-center gap-2">
                    <span class="fw-bold">!</span>
                    <small class="fw-medium">Lengkapi data berikut. Field bertanda (<span class="fw-bold text-danger">*</span>) wajib diisi.</small>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="kpajak" class="form-label fw-semibold text-dark fs-7">Kode Pajak <span class="text-danger">*</span></label>
                        <input type="text" id="kpajak" name="kpajak" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Masukkan kode pajak" required>
                    </div>

                    <div class="col-md-6">
                        <label for="np" class="form-label fw-semibold text-dark fs-7">Nama Pajak <span class="text-danger">*</span></label>
                        <input type="text" id="np" name="np" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Masukkan nama pajak" required>
                    </div>

                    <div class="col-md-6">
                        <label for="persentase" class="form-label fw-semibold text-dark fs-7">Persentase (%) <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" step="0.01" name="persentase" id="persentase" class="form-control border-danger-subtle shadow-sm py-2" placeholder="Masukkan persentase pajak" required>
                            <span class="input-group-text bg-danger bg-opacity-10 text-danger border-danger-subtle fw-bold">%</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="bm" class="form-label fw-semibold text-dark fs-7">Berlaku Mulai</label>
                        <input type="date" id="bm" name="bm" class="form-control border-danger-subtle shadow-sm rounded-3 py-2">
                    </div>

                    <div class="col-md-12">
                        <label for="status" class="form-label fw-semibold text-dark fs-7">Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-select border-danger-subtle shadow-sm rounded-3 py-2" required>
                            <option value="aktif" selected>Aktif</option>
                            <option value="nonaktif">Non-aktif</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4 pt-3 border-top justify-content-end">
                    <a href="index.php" class="btn btn-outline-danger px-4 py-2 rounded-3 fw-semibold">Kembali</a>
                    <button type="reset" class="btn btn-warning text-dark px-4 py-2 rounded-3 fw-semibold">Reset</button>
                    <button type="submit" class="btn btn-danger bg-gradient px-4 py-2 rounded-3 fw-bold shadow-sm">Simpan Pajak</button>
                </div>

            </form>
        </div>
    </div>

</div>

<script src="/E-Commerce_Project/assets/script.js"></script>

<?php
include '../../layout/footer.php';
?>