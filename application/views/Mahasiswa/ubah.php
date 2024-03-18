<div class="container">
  <div class="row mt-3">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Form Ubah Data Mahasiswa
        </div>

        <form action="" method="post">
          <div class="card-body">
            <input type="hidden" value="<?= $mahasiswa['id'];?>">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
            </div>
            <div class="mb-3">
              <label for="Nim" class="form-label">Nim</label>
              <input type="text" class="form-control" id="eim" name="nim" value="<?= $mahasiswa['nim'] ?>">
            </div>
            <div class="mb-3">
              <label for="Email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ?>">
            </div>
            <select class="form-select form-select-sm" aria-label="Small select example" id="jurusan" name="jurusan">
              <?php foreach ($jurusan as $j) : ?>
                <?php if ($j == $mahasiswa['jurusan']) : ?>
                  <option value="<?= $j ?>" selected><?= $j; ?></option>
                <?php else : ?>
                  <option value="<?= $j ?>"><?= $j; ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>

            <button type="submit" class="btn btn-primary mt-3 float-end mb-3" name="ubah">Ubah Mahasiswa</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>