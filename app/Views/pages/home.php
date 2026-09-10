<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="welcome">
    <p class="welcome-label">Next stop: the stars</p>
    <h1>Welcome aboard the Astral Express</h1>
    <p>A simple Point-of-Sale account system for customers and users across the galaxy.</p>
    <a class="button" href="<?= base_url('customers') ?>">View Customer Accounts</a>
</section>

<section>
    <h2>Express Services</h2>
    <div class="card-grid">
        <article class="card">
            <span class="card-icon">01</span>
            <h3>Customer Accounts</h3>
            <p>View customer names, email addresses, and phone numbers.</p>
            <a href="<?= base_url('customers') ?>">View Customers →</a>
        </article>

        <article class="card">
            <span class="card-icon">02</span>
            <h3>User Accounts</h3>
            <p>View usernames, complete names, and assigned roles.</p>
            <a href="<?= base_url('users') ?>">View Users →</a>
        </article>

        <article class="card">
            <span class="card-icon">03</span>
            <h3>About the System</h3>
            <p>Read how this CodeIgniter laboratory project was created.</p>
            <a href="<?= base_url('about') ?>">Learn More →</a>
        </article>
    </div>
</section>
<?= $this->endSection() ?>
