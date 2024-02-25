<style>
    .my-navbar .btn {
        padding: 0.8rem;
        border-color: rgba(255, 255, 255, 0.3);
        border-bottom: 2px;
    }
</style>

<nav class="m-0 p-0 bg-primary position-fixed h-100 overflow-auto my-navbar d-flex flex-column" style="width: 15rem;">
    <a href="<?= uri('/dashboard.php') ?>" class="btn btn-primary d-block <?= bs_active('/dashboard') ?>">
        Dashboard
    </a>
    <a href="<?= uri('/penjualan/') ?>" class="btn btn-primary d-block <?= bs_active('/penjualan/') ?>">
        Penjualan
    </a>
    <a href="<?= uri('/produk/') ?>" class="btn btn-primary d-block <?= bs_active('/produk/') ?>">
        Produk
    </a>
    <a href="<?= uri('/keranjang/') ?>" class="btn btn-primary d-block <?= bs_active('/keranjang/') ?>">
        Keranjang (<?= count(session_get('keranjang')) ?>)
    </a>
    <a href="<?= uri('/pelanggan/') ?>" class="btn btn-primary d-block <?= bs_active('/pelanggan/') ?>">
        Pelanggan
    </a>
    <?php if ($user['level'] == 'admin') : ?>
        <a href="<?= uri('/petugas/') ?>" class="btn btn-primary d-block <?= bs_active('/petugas/') ?>">
            Petugas
        </a>
    <?php endif ?>
    <a href="<?= uri('/logout.php') ?>" onclick="return confirm('Keluar?')" class="btn btn-primary d-block mt-auto" style="margin-top: auto;">
        Logout
    </a>
</nav>
<nav class="navbar bg-body-tertiary" style="margin-left: 15rem;">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Kasir Pintar</span>
    <div class="fw-bold ms-auto px-2"><?= "{$user['nama']} | {$user['level']}" ?></div>
  </div>
</nav>

<div style="margin-left: 15rem;">
