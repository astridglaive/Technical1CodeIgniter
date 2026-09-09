<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-box">
    <p class="page-label">Authorized Personnel</p>
    <h1>Astral Express Crew</h1>
    <p>The character records below come from a static PHP array in the Users controller.</p>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['name']) ?></td>
                        <td><?= esc($user['role']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
