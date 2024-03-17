<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h3 class="mt-3">Daftar Mahasiswa</h3>
      <ul class="list-group mt-3">
        <?php foreach ($mahasiswa as $mhs) : ?>
          <li class="list-group-item"><?= $mhs['nama']; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>