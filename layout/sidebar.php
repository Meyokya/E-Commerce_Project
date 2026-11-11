<?php
$current_folder = basename(dirname($_SERVER['SCRIPT_NAME']));
$script_name = $_SERVER['SCRIPT_NAME'];

$menus = [
    'kategori'          => 'Master Kategori',
    'produk'            => 'Master Produk',
    'merek'             => 'Master Merek',
    'satuan'            => 'Master Satuan',
    'pelanggan'         => 'Master Pelanggan',
    'alamat_pengiriman' => 'Master Alamat Pengiriman',
    'metode_pembayaran' => 'Master Metode Pembayaran',
    'kurir'             => 'Master Kurir',
    'promo'             => 'Master Promo',
    'pajak'             => 'Master Pajak'
];

$total_menu = count($menus);
$is_master_active = array_key_exists($current_folder, $menus);
$is_dashboard_active = ($current_folder == 'E-Commerce_Project' || (strpos($script_name, 'index.php') !== false && !$is_master_active));
?>

<nav class="col-md-3 col-lg-2 d-md-block bg-white sidebar border-end min-vh-100 p-3 shadow-sm">
    <ul class="nav flex-column gap-1 mb-3">
        <li class="nav-item">
            <a class="nav-link rounded-3 px-3 py-2 transition-all <?= $is_dashboard_active ? 'bg-danger text-white fw-bold shadow-sm' : 'text-dark hover-bg-light' ?>" 
               href="/E-Commerce_Project/index.php">
                Dashboard
            </a>
        </li>
    </ul>

    <div class="mb-2">
        <button class="btn d-flex align-items-center justify-content-between p-2 text-decoration-none text-danger fw-bold border-0 bg-transparent w-100 shadow-none <?= !$is_master_active ? 'collapsed' : '' ?>" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#masterDataCollapse"
                aria-expanded="<?= $is_master_active ? 'true' : 'false' ?>"
                aria-controls="masterDataCollapse">
            <span class="d-flex align-items-center gap-2">
                <span class="sidebar-heading uppercase fs-7 mb-0">MASTER DATA</span>
                <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-circle fs-8"><?= $total_menu ?></span>
            </span>
        </button>

        <div class="collapse <?= $is_master_active ? 'show' : '' ?> mt-2" id="masterDataCollapse">
            <ul class="nav flex-column gap-1 ps-2">
                <?php foreach ($menus as $folder => $label): 
                    $is_active = ($current_folder == $folder);
                ?>
                    <li class="nav-item">
                        <a class="nav-link rounded-3 px-3 py-2 transition-all <?= $is_active ? 'bg-danger text-white fw-bold shadow-sm' : 'text-dark hover-bg-light' ?>" 
                           href="/E-Commerce_Project/master/<?= $folder ?>/index.php">
                            <?= $label ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>

<main class="col-md-9 ms-sm-auto col-lg-10 p-3 p-md-4">