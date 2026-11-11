<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">

        <div class="card-header bg-danger bg-gradient text-white p-3 p-md-4 border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-0 text-uppercase tracking-wide">Form Master Alamat Pengiriman</h5>
                <small class="text-white-50 fs-7">Gensokyo Logistics & Delivery System</small>
            </div>
            <span class="fs-2 opacity-50 text-warning">☯</span>
        </div>

        <div class="card-body p-4 bg-light bg-opacity-25">
            <form action="" method="POST">

                <div class="alert alert-danger border-0 bg-danger bg-opacity-10 text-danger rounded-3 mb-4 p-3 d-flex align-items-center gap-2">
                    <span class="fw-bold">!</span>
                    <small class="fw-medium">Lengkapi data berikut. Field bertanda (<span class="fw-bold text-danger">*</span>) wajib diisi.</small>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="pelanggan" class="form-label fw-semibold text-dark fs-7">Pelanggan <span class="text-danger">*</span></label>
                        <select name="pelanggan" id="pelanggan" class="form-select border-danger-subtle shadow-sm rounded-3 py-2" required>
                            <option value="" disabled selected hidden>Pilih pelanggan...</option>
                            <option value="as">Andi Saputra</option>
                            <option value="p1">Pelanggan 1</option>
                            <option value="p2">Pelanggan 2</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="la" class="form-label fw-semibold text-dark fs-7">Label Alamat <span class="text-danger">*</span></label>
                        <input type="text" id="la" name="la" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Misal: Rumah, Kantor, Cosplay Studio" required>
                    </div>

                    <div class="col-md-6">
                        <label for="np" class="form-label fw-semibold text-dark fs-7">Nama Penerima <span class="text-danger">*</span></label>
                        <input type="text" id="np" name="np" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Masukkan nama penerima" required>
                    </div>

                    <div class="col-md-6">
                        <label for="telepon" class="form-label fw-semibold text-dark fs-7">Nomor Telepon <span class="text-danger">*</span></label>
                        <input type="tel" id="telepon" name="telepon" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="col-md-4">
                        <label for="provinsi" class="form-label fw-semibold text-dark fs-7">Provinsi <span class="text-danger">*</span></label>
                        <select name="provinsi" id="provinsi" class="form-select border-danger-subtle shadow-sm rounded-3 py-2" required>
                            <option value="" disabled selected hidden>Pilih provinsi...</option>
                            <option value="riau">Riau</option>
                            <option value="jambi">Jambi</option>
                            <option value="sumbar">Sumatera Barat</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="kotkab" class="form-label fw-semibold text-dark fs-7">Kota/Kabupaten <span class="text-danger">*</span></label>
                        <select name="kotkab" id="kotkab" class="form-select border-danger-subtle shadow-sm rounded-3 py-2" required>
                            <option value="" disabled selected hidden>Pilih kota/kabupaten...</option>
                            <option value="pku">Pekanbaru</option>
                            <option value="bkt">Bukittinggi</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="kecamatan" class="form-label fw-semibold text-dark fs-7">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-select border-danger-subtle shadow-sm rounded-3 py-2">
                            <option value="" disabled selected hidden>Pilih kecamatan...</option>
                            <option value="mp">Marpoyan Damai</option>
                            <option value="pk">Pekanbaru Kota</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="alengkap" class="form-label fw-semibold text-dark fs-7">Alamat Lengkap <span class="text-danger">*</span></label>
                        <textarea id="alengkap" name="alengkap" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" rows="3" placeholder="Nama jalan, nomor rumah, RT/RW, patokan..." required></textarea>
                    </div>

                    <div class="col-md-6">
                        <label for="kp" class="form-label fw-semibold text-dark fs-7">Kode Pos</label>
                        <input type="text" id="kp" name="kp" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Contoh: 28282">
                    </div>

                    <div class="col-md-6 d-flex align-items-end mb-1">
                        <div class="form-check">
                            <input type="checkbox" id="autama" name="autama" value="Ya" class="form-check-input border-danger">
                            <label for="autama" class="form-check-label fw-semibold text-dark fs-7">Jadikan Alamat Utama</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4 pt-3 border-top justify-content-end">
                    <a href="index.php" class="btn btn-outline-danger px-4 py-2 rounded-3 fw-semibold">Kembali</a>
                    <button type="reset" class="btn btn-warning text-dark px-4 py-2 rounded-3 fw-semibold">Reset</button>
                    <button type="submit" class="btn btn-danger bg-gradient px-4 py-2 rounded-3 fw-bold shadow-sm">Simpan Alamat</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php
include '../../layout/footer.php';
?>