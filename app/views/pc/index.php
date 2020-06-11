<div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <?php //Flasher::flash(); 
            ?>
        </div>
    </div>
    <?php //var_dump($data); 
    ?>
    <div class="row">
        <div class="col-lg-6">
            <a href="<?= BASEURL; ?>/PC/tambah" class="btn btn-primary">

                Tambah

            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mt-2">

        </div>
    </div>



    <h3>Daftar Pimpinan Cabang</h3>

    <br>
    <table class="table">
        <thead class="thead">
            <tr class="table-success">
                <th scope="col">ID</th>
                <th scope="col">Nama Pimpinan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pimpinan Daerah</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['pc'] as $cabang) : ?>
            <tr>
                <th scope="row"><?= $cabang['id_pc']; ?></th>
                <td><?= $cabang['nama_pc']; ?></td>
                <td><?= $cabang['alamat_pc']; ?></td>
                <td><?= $cabang['nama_pd']; ?></td>
                <td>
                    <button type="button" class="btn btn-primary">Detail</button>
                    <button type="button" class="btn btn-warning">Ubah</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>