<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-box">
    <h1>About Astral Express POS</h1>
    <p>Astral Express POS is the first version of a basic Point-of-Sale account system created for a CodeIgniter 4 laboratory activity.</p>

    <h2>What this project demonstrates</h2>
    <ul>
        <li>Creating controllers and controller methods</li>
        <li>Registering custom routes</li>
        <li>Passing PHP arrays from controllers to views</li>
        <li>Displaying array records using a <code>foreach</code> loop</li>
        <li>Using one shared navigation layout for several pages</li>
    </ul>

    <p>No database is used in this version. The customer and user records are temporary static PHP arrays.</p>
</section>
<?= $this->endSection() ?>
