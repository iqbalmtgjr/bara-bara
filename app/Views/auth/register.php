<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5">

                <h3 class="mb-3 text-center">Daftar</h3>

                <div class="form-outline mb-4">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control form-control-md" placeholder="Nama" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control form-control-md" placeholder="email@example.com" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-control form-control-md" name="" id="">
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX-2">Password</label>
                    <input type="password" id="typePasswordX-2" class="form-control form-control-md" placeholder="Password" />
                </div>
                <button class="btn btn-primary btn-md btn-block col-md-12" type="submit">Daftar</button>
                <div class="mt-3">
                    <p class="mb-0">Sudah punya akun? <a href="<?= base_url('/login') ?>" class="fw-bold">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>