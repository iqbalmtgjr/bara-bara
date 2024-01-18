<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="col-lg-12">
    <h1>Tambah Poling</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Pembuat Poling</label>
                        <input type="text" name="nama_pembuat" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pertanyaan</label>
                        <textarea name="pertanyaan" class="form-control" id="" cols="30" rows="5" placeholder="Masukkan Pertanyaan"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pilihan Jawaban</label>
                        <div id="polingForm">
                            <input type="text" name="pilihan1" class="form-control mb-2" placeholder="Pilihan 1">
                            <input type="text" name="pilihan2" class="form-control mb-2" placeholder="Pilihan 2">
                        </div>
                        <a href="#" class="btn btn-secondary btn-sm" onclick="tambahPilihan()"><i class="bi bi-plus-circle-dotted"></i> Tambah Pilihan</a>
                        <a href="#" id="kurangPilihanBtn" class="btn btn-secondary btn-sm d-none" onclick="kurangPilihan()"><i class="bi bi-dash-circle-dotted"></i> Kurangi Pilihan</a>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Akhir Poling</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-success btn-md float-end mt-3">Buat Poling</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var counter = 1;

    function tambahPilihan() {
        var pilihanContainer = document.getElementById('polingForm');

        // Buat elemen input baru
        var inputPilihan = document.createElement('input');
        inputPilihan.type = 'text';
        inputPilihan.name = 'pilihan' + (counter + 2);
        inputPilihan.className = 'form-control mb-2';
        inputPilihan.placeholder = 'Pilihan ' + (counter + 2);

        // Tambah elemen input baru ke dalam div pilihanContainer
        pilihanContainer.appendChild(inputPilihan);
        counter++;

        periksaJumlahPilihan();
    }

    function kurangPilihan() {
        var pilihanContainer = document.getElementById('polingForm');

        // Buat elemen input baru
        if (pilihanContainer.childElementCount > 1) {
            // Dapatkan elemen anak terakhir dan hapus
            var lastChild = pilihanContainer.lastChild;
            pilihanContainer.removeChild(lastChild);

            // Kurangi counter untuk nomor urut pilihan
            counter--;

            periksaJumlahPilihan();
        }
    }

    function periksaJumlahPilihan() {
        var kurangPilihanBtn = document.getElementById('kurangPilihanBtn');
        var pilihanContainer = document.getElementById('polingForm');

        // Periksa jumlah elemen input
        if (pilihanContainer.childElementCount < 3) {
            // Tambahkan kelas d-none pada button "Kurangi Pilihan"
            kurangPilihanBtn.classList.add('d-none');
        } else {
            // Hapus kelas d-none jika jumlah elemen kurang dari atau sama dengan 3
            kurangPilihanBtn.classList.remove('d-none');
        }
    }
</script>
<?= $this->endSection() ?>