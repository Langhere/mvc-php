<h3>Data Detail Mahasiswa</h3>

<div class="row "> <div class="col-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data['mhs']['nama_mhs'] ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">semester <?= $data['mhs']['semester_mhs'] ?></h6>
                <p class="card-text"><?= $data['mhs']['alamat_mhs'] ?></p>
            </div>
        </div>
    </div>
</div>
