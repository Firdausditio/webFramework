<?= $this->extend("template/master") ?>
<?= $this->section("content") ?>
<section>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">User</h1>
        <form method="GET" action="" class="form-group">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="Submit">CARI DATA</button>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <?php echo $jumlah; ?>
                </div>
            </div>
        </form>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Telepon</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Telepon</th>
                                <th>Detail</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no=1 ; foreach($user as $data): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['username']?></td>
                                <td><?= $data['alamat']?></td>
                                <td><?= $data['tempat_lahir']?></td>
                                <td><?= $data['tanggal_lahir']?></td>
                                <td><?php if ($data['jenkel'] == 1) { echo "Laki-laki"; } else { "Perempuan"; }?></td>
                                <td><?= $data['telepon']?></td>
                                <td><a href="<?= base_url('user/detailUser/' . $data['username'])?>" class="btn btn-warning">Detail</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
<?= $this->Endsection("content") ?>