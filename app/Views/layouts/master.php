<?= $this->include('layouts/header') ?>
<?= $this->include('layouts/navbar') ?>
<!-- Mashead header-->
<header class="masthead">
    <div style="height: 100%;" class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-7">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Selamat Datang di IndoPoling.id</h1>
                    <p class="lead fw-normal text-muted mb-5">Ayo buat polling kita sendiri di Indopoling! Dengan Indopoling, kita dapat membuat polling sesuai dengan keinginan kita!</p>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <a class="btn btn-primary btn-lg" href="<?= base_url('/poling') ?>">Buat Polling Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <!-- Masthead device mockup feature-->
                <div>
                    <img src="<?= base_url('assets/assets/img/chart.png') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</header>
<?= $this->include('layouts/footer') ?>