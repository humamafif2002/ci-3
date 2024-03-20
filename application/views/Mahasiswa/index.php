<div class="container">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
  <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->
  <?php elseif ($this->session->flashdata('flash')) : ?>
    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('hapus'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->
  <?php elseif ($this->session->flashdata('flash')) : ?>
    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('ubah'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->
  <?php endif ?>
  <div class="row mt-3">
    <div class="col-md-4">
      <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
  </div>


  <div class="row mt-3">
    <div class="col-md-4">
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" aria-describedby="button-addon2" name="keyword" autofocus>
          <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <h3>Daftar Mahasiswa</h3>
      <?php if (empty($mahasiswa)) : ?>
        <div class="alert alert-danger" role="alert">
          Data <?= $this->input->post('keyword'); ?> Tidak ditemukan
        </div>
      <?php endif; ?>
      <ul class="list-group mt-3">

        <?php foreach ($mahasiswa as $mhs) : ?>
          <li class="list-group-item"><?= $mhs['nama']; ?>
            <a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="tombolHapus"><span class="badge text-bg-danger float-end ms-2 ">Hapus</span></a>
            <a href="<?= base_url() ?>mahasiswa/ubah/<?= $mhs['id']; ?>"><span class="badge text-bg-primary float-end ms-2">Ubah</span></a>
            <a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id']; ?>"><span class="badge text-bg-warning float-end ms-2">Detail</span></a>

          </li>

        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>