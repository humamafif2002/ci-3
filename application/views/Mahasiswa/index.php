<div class="container">
  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php elseif ($this->session->flashdata('hapus')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('hapus'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif ?>
  <div class="row mt-3">
    <div class="col-md-4">
      <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <h3 class="mt-3">Daftar Mahasiswa</h3>
      <ul class="list-group mt-3">
        <?php foreach ($mahasiswa as $mhs) : ?>
          <li class="list-group-item"><?= $mhs['nama']; ?>
            <a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('yakin?');"><span class="badge text-bg-danger float-end ms-2">Hapus</span></a>
            <a href=""><span class="badge text-bg-primary float-end ms-2">Ubah</span></a>
            <a href=""><span class="badge text-bg-warning float-end ms-2">Update</span></a>

          </li>

        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>