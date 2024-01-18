<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="col-lg-12">
    <h1>Hubungi Kami</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="info@email.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Hp</label>
                        <input type="number" name="no_hp" class="form-control" placeholder="08-xxx-xxx-xxx">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Asal Daerah</label>
                        <input type="text" name="asal" class="form-control" placeholder="Asal">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pertanyaan</label>
                        <textarea name="pertanyaan" rows="3" class="form-control" placeholder="Pertanyaan"></textarea>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-success btn-md float-end mt-3">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>