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



    <h3>Data Pelaksanaan TM3</h3>

    <br>
    <table class="table">
        <thead class="thead">
            <tr class="table-success">
                <th scope="col">ID TM3</th>
                <th scope="col">Nama Pimpinan</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Materi</th>
                <th scope="col">Jumlah Peserta</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['tm3'] as $tm3) : ?>
            <tr>
                <th scope="row"><?= $tm3['id_tm3']; ?></th>
                <td><?= $tm3['nama']; ?></td>
                <td><?= $tm3['tgl_mulai']; ?></td>
                <td><?= $tm3['tgl_selesai']; ?></td>
                <td>
                    <?= $tm3['materi']; ?>
                </td>
                <td><?= $tm3['jml_peserta']; ?></td>
                <td>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>