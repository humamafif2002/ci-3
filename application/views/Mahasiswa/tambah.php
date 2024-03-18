<div class="container">

  <div class="row mt-3">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Form Tambah Data Mahasiswa
        </div>

        <form action="" method="post">
          <div class="card-body">
            <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
            <?php endif ?>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" autocomplete="off" name="nama">
            </div>
            <div class="mb-3">
              <label for="Nim" class="form-label">Nim</label>
              <input type="text" class="form-control" id="eim" placeholder="Nim Mahasiswa" autocomplete="off" name="nim">
            </div>
            <div class="mb-3">
              <label for="Email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Email Mahasiswa" autocomplete="off" name="email">
            </div>
            <select class="form-select form-select-sm" aria-label="Small select example" id="jurusan" name="jurusan">
              <option selected disabled hidden>PILIH JURUSAN</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Pangan">Teknik Pangan</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Industri">Teknik Industri</option>
            </select>

            <button type="submit" class="btn btn-primary mt-3 float-end mb-3" name="tambah">Tambah Mahasiswa</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>