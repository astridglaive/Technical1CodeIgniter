<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | Astral Express POS</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/pos.css') ?>?v=2">
</head>
<body>
    <header>
        <div class="container header-content">
            <a class="logo" href="<?= base_url('/') ?>">
                <span class="logo-icon">✦</span>
                <span>Astral Express POS</span>
            </a>

            <nav>
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= base_url('/') ?>">Home</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
                <a class="<?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= base_url('customers') ?>">Customers</a>
                <a class="<?= $activePage === 'users' ? 'active' : '' ?>" href="<?= base_url('users') ?>">Users</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?= date('Y') ?> Astral Express POS | CodeIgniter 4 Laboratory Activity</p>
            <p class="disclaimer">Unofficial student project inspired by Honkai: Star Rail.</p>
        </div>
    </footer>
</body>
</html>
