<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="welcome">
    <p class="welcome-label">Next stop: the stars</p>
    <h1>Welcome aboard the Astral Express</h1>
    <p>A simple Point-of-Sale account system for passengers and crew across the galaxy.</p>
    <a class="button" href="<?= base_url('customers') ?>">View Passenger Accounts</a>
</section>

<section>
    <h2>Express Services</h2>
    <div class="card-grid">
        <article class="card">
            <span class="card-icon">01</span>
            <h3>Passenger Accounts</h3>
            <p>View passenger names, communication addresses, and contact codes.</p>
            <a href="<?= base_url('customers') ?>">View Passengers →</a>
        </article>

        <article class="card">
            <span class="card-icon">02</span>
            <h3>Crew Accounts</h3>
            <p>View Astral Express usernames, crew names, and assigned duties.</p>
            <a href="<?= base_url('users') ?>">View Crew →</a>
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
