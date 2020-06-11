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



    <h3>Data Pelaksanaan TM1</h3>

    <br>
    <table class="table">
        <thead class="thead">
            <tr class="table-success">
                <th scope="col">ID TM1</th>
                <th scope="col">Nama Pimpinan</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Materi</th>
                <th scope="col">Jumlah Peserta</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['tm1pr'] as $tm1pr) : ?>
            <tr>
                <th scope="row"><?= $tm1pr['id_tm1']; ?></th>
                <td><?= $tm1pr['nama_pr']; ?></td>
                <td><?= $tm1pr['tgl_mulai']; ?></td>
                <td><?= $tm1pr['tgl_selesai']; ?></td>
                <td>
                    <?= $tm1pr['materi']; ?>
                </td>
                <td><?= $tm1pr['jml_peserta']; ?></td>
                <td>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php foreach ($data['tm1pc'] as $tm1pc) : ?>
            <tr>
                <th scope="row"><?= $tm1pc['id_tm1']; ?></th>
                <td><?= $tm1pc['nama_pc']; ?></td>
                <td><?= $tm1pc['tgl_mulai']; ?></td>
                <td><?= $tm1pc['tgl_selesai']; ?></td>
                <td>
                    <?= $tm1pc['materi']; ?>
                </td>
                <td><?= $tm1pc['jml_peserta']; ?></td>
                <td>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>