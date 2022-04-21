<?= $this->extend("template/master") ?>
<?= $this->section("content") ?>
<section>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">User</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail User</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Nama : </th><td><?= $user['username']?></td>
                    </tr>
                    <tr>
                        <th>Alamat : </th><td><?= $user['alamat']?></td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir : </th><td><?= $user['tempat_lahir']?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir : </th><td><?= $user['tanggal_lahir']?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin : </th><td><?php if ($user['jenkel'] == 1) { echo "Laki-laki"; } else { "Perempuan"; }?></td>
                    </tr>
                    <tr>
                        <th>Telepon : </th><td><?= $user['telepon']?></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</section>
<?= $this->Endsection("content") ?>