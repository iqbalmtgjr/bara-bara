<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5">

                <h3 class="mb-3 text-center">Login</h3>

                <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2">Email</label>
                    <input type="email" id="typeEmailX-2" class="form-control form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX-2">Password</label>
                    <input type="password" id="typePasswordX-2" class="form-control form-control" />
                </div>

                <!-- Checkbox -->
                <!-- <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                </div> -->

                <button class="btn btn-primary btn-md btn-block col-md-12" type="submit">Login</button>
                <div class="mt-3">
                    <p class="mb-0">Belum punya akun? <a href="<?= base_url('/daftar') ?>" class="fw-bold">Daftar</a>
                    </p>
                </div>

                <hr class="my-4">

                <button class="btn btn-md btn-block btn-primary col-md-12" style="background-color: #dd4b39;" type="submit"><i class="bi bi-google"></i> Masuk dengan google</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>