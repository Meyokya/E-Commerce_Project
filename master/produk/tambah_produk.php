<?php
include '../../layout/header.php';
include '../../layout/sidebar.php';
?>

<div class="container-fluid py-4 px-3 px-md-4">
    
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">
        
        <div class="card-header bg-danger bg-gradient text-white p-3 p-md-4 border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold mb-0 text-uppercase">FORM MASTER PRODUK / BARANG</h5>
                <small class="text-white-50 fs-7">Tambah / Edit Data Produk</small>
            </div>
            <span class="fs-2 opacity-50 text-warning">☯</span>
        </div>
        
        <div class="card-body p-4 bg-light bg-opacity-25">
            <form id="MasterForm" action="proses.php" method="POST" enctype="multipart/form-data">
                
                <div class="alert alert-danger border-0 bg-danger bg-opacity-10 text-danger rounded-3 mb-4 p-3 d-flex align-items-center gap-2">
                    <span class="fw-bold">!</span>
                    <small class="fw-medium">Lengkapi data berikut. Field bertanda (<span class="fw-bold text-danger">*</span>) wajib diisi.</small>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="kb" class="form-label fw-semibold text-dark fs-7">Kode Barang / SKU <span class="text-danger">*</span></label>
                        <input type="text" id="kb" name="kb" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Masukkan kode barang / SKU" required>
                    </div>

                    <div class="col-md-6">
                        <label for="nb" class="form-label fw-semibold text-dark fs-7">Nama Barang <span class="text-danger">*</span></label>
                        <input type="text" id="nb" name="nb" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Masukkan nama barang" required>
                    </div>

                    <div class="col-md-6">
                        <label for="kategori" class="form-label fw-semibold text-dark fs-7">Kategori <span class="text-danger">*</span></label>
                        <select name="kategori" id="kategori" class="form-select border-danger-subtle shadow-sm rounded-3 py-2" required>
                            <option value="" disabled selected hidden>Pilih kategori...</option>
                            <option value="aksesori komputer">Aksesori Komputer</option>
                            <option value="aksesori laptop">Aksesori Laptop</option>
                            <option value="aksesori hp">Aksesori HP</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="merek" class="form-label fw-semibold text-dark fs-7">Merek</label>
                        <input type="text" id="merek" name="merek" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Masukkan merek">
                    </div>

                    <div class="col-md-6">
                        <label for="hg" class="form-label fw-semibold text-dark fs-7">Harga Jual <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text bg-danger bg-opacity-10 text-danger border-danger-subtle fw-bold">Rp</span>
                            <input type="number" id="hg" name="hg" class="form-control border-danger-subtle shadow-sm rounded-end-3 py-2" placeholder="Masukkan harga jual" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="hm" class="form-label fw-semibold text-dark fs-7">Harga Modal</label>
                        <div class="input-group">
                            <span class="input-group-text bg-danger bg-opacity-10 text-danger border-danger-subtle fw-bold">Rp</span>
                            <input type="number" id="hm" name="hm" class="form-control border-danger-subtle shadow-sm rounded-end-3 py-2" placeholder="Masukkan harga modal">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="sa" class="form-label fw-semibold text-dark fs-7">Stok Awal <span class="text-danger">*</span></label>
                        <input type="number" id="sa" name="sa" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Masukkan stok awal" required>
                    </div>

                    <div class="col-md-6">
                        <label for="bsm" class="form-label fw-semibold text-dark fs-7">Batas Stok Minimum</label>
                        <input type="number" id="bsm" name="bsm" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Masukkan batas stok minimum">
                    </div>

                    <div class="col-md-6">
                        <label for="berat" class="form-label fw-semibold text-dark fs-7">Berat (gram)</label>
                        <input type="number" id="berat" name="berat" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" placeholder="Masukkan berat (gram)">
                    </div>

                    <div class="col-md-6">
                        <label for="fb" class="form-label fw-semibold text-dark fs-7">Foto Barang</label>
                        <input type="file" id="fb" name="fb" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" accept="image/*">
                    </div>

                    <div class="col-md-12">
                        <label for="status" class="form-label fw-semibold text-dark fs-7">Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-select border-danger-subtle shadow-sm rounded-3 py-2" required>
                            <option value="aktif" selected>Aktif</option>
                            <option value="nonaktif">Non-aktif</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="deskripsi" class="form-label fw-semibold text-dark fs-7">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="form-control border-danger-subtle shadow-sm rounded-3 py-2" rows="3" placeholder="Masukkan deskripsi penjelasan produk..."></textarea>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4 pt-3 border-top justify-content-end">
                    <a href="index.php" class="btn btn-outline-danger px-4 py-2 rounded-3 fw-semibold">Kembali</a>
                    <button type="reset" class="btn btn-warning text-dark px-4 py-2 rounded-3 fw-semibold">Reset</button>
                    <button type="submit" class="btn btn-danger bg-gradient px-4 py-2 rounded-3 fw-bold shadow-sm">Simpan Produk</button>
                </div>

            </form>
        </div>
    </div>

</div>

<script src="/E-Commerce_Project/assets/script.js"></script>

<?php
include '../../layout/footer.php';
?>