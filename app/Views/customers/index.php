<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-box">
    <p class="page-label">Interstellar Directory</p>
    <h1>Passenger Accounts</h1>
    <p>The character records below come from a static PHP array in the Customers controller.</p>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact Code</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $index => $customer): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($customer['name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
