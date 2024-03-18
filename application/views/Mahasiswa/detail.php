<div class="container">
  <div class="row mt-3">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
          <p class="card-text"><?= $mahasiswa['nim']; ?></p>
          <p class="card-text"><?= $mahasiswa['email']; ?></p>
          <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
          <a href="<?=base_url()?>mahasiswa" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>