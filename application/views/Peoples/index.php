<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3 class="mt-3">List Of People</h3>

            <div class="row">
                <div class="col-md-5">
                    <form action="<?= base_url('peoples');?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search Keywords.." name="keyword" autocomplete="off" autofocus>
                            <input class="btn btn-outline-primary" type="submit" id="button-addon2" name="submit"></input>
                        </div>
                    </form>
                </div>
            </div>

            <h6>Ditemukan  <?= $total_rows;?> Hasil</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (empty($peoples)):?>
                    <tr>
                        <td colspan='4'>
                        <div class="alert alert-danger" role="alert">
                        Data <?= $_POST['keyword'];?> <a href="#" class="alert-link">Tidak Ditemukan</a>.
                        </div>
                        </td>
                    </tr>
                <?php endif?>
                    <?php foreach ($peoples as $p) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td><a href="" class="badge text-bg-primary text-decoration-none">Detail</a></td>
                            <td><a href="" class="badge text-bg-success text-decoration-none">Edit</a></td>
                            <td><a href="" class="badge text-bg-danger text-decoration-none ">Hapus</a></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>