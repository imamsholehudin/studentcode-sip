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
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mt-2">

        </div>
    </div>



    <h3>Daftar Pimpinan Ranting</h3>

    <br>
    <table class="table">
        <thead class="thead">
            <tr class="table-success">
                <th scope="col">ID</th>
                <th scope="col">Nama Pimpinan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pimpinan Daerah / Cabang</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['pr'] as $ranting) : ?>
            <tr>
                <th scope="row"><?= $ranting['id_pr']; ?></th>
                <td><?= $ranting['nama_pr']; ?></td>
                <td><?= $ranting['alamat_pr']; ?></td>
                <td>
                    <?php
                        if ($ranting['adaPC']) {
                            echo $ranting['nama_pc'];
                        } else {
                            echo $ranting['nama_pd'];
                        }
                        //$ranting['nama_pc'];
                        ?>
                </td>
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