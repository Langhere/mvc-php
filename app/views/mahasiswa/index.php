<!-- Button trigger modal -->
<div style="margin-left=20px">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">
        Tambah Data Mahasiswa
    </button>
</div>
<div class="container mt-5">
    <div class="row">

        <div class="col-6">
            <h3>Data Mahasiswa</h3>
            <?php foreach($data['mhs'] as $mhs) : ?>
            <ul>
                <li>
                <p><?= $mhs['nama_mhs']; ?> 
                <a href="<?=BASEURL?>/mahasiswa/detail/<?= $mhs['id_mhs']; ?>" class="badge text-bg-primary" style="text-decoration: none;"> Detail</a>
                </p>
                </li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahData" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahData">Tambah Data Manahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
                <!-- nama -->
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="nama" name="nama">
                <!-- alamat -->
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" class="form-control" id="alamat" placeholder="Jln ****" name="alamat">
                <br>
                <!-- select semester -->
                <select class="form-select" aria-label="Default select example" name="semester">
                    <option selected>Semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
      </div>
    </div>
  </div>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function() {
    this.querySelector('button[type="submit"]').disabled = true;
});

</script>