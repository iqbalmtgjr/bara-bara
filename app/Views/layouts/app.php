<?= $this->include('layouts/header') ?>
<?= $this->include('layouts/navbar') ?>

<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</header>

<?= $this->include('layouts/footer') ?>