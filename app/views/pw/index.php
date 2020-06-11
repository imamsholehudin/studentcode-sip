<div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <?php Flasher::flash();
            ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <a href="<?= BASEURL; ?>/PW/tambah" class="btn btn-primary">

                Tambah

            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mt-2">

        </div>
    </div>



    <h3>Daftar Pimpinan Wilayah</h3>

    <br>
    <table class="table">
        <thead class="thead">
            <tr class="table-success">
                <th scope="col">ID</th>
                <th scope="col">Nama Pimpinan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['pw'] as $wilayah) : ?>
            <tr>
                <th scope="row"><?= $wilayah['id_pw']; ?></th>
                <td><?= $wilayah['nama']; ?></td>
                <td><?= $wilayah['alamat']; ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/PW/TM3/<?= $wilayah['id_pw'] ?>" class="btn btn-success">
                        Log Kaderisasi
                    </a>
                    <a href="<?= BASEURL; ?>/PD/<?= $wilayah['id_pw'] ?>" class="btn btn-primary">
                        Pimpinan Daerah
                    </a>
                    <a href="<?= BASEURL; ?>/PW/ubah<?= $wilayah['id_pw'] ?>" class="btn btn-warning">
                        Ubah
                    </a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#approve">
                        Hapus
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah data akan dihapus ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= BASEURL; ?>/PW/hapus/<?= $wilayah['id_pw'] ?>" class="btn btn-primary">
                        Hapus
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>