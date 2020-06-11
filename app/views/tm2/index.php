<div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <?php //Flasher::flash(); 
            ?>
        </div>
    </div>

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



    <h3>Data Pelaksanaan TM2</h3>

    <br>
    <table class="table">
        <thead class="thead">
            <tr class="table-success">
                <th scope="col">ID TM2</th>
                <th scope="col">Nama Pimpinan</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Materi</th>
                <th scope="col">Jumlah Peserta</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['tm2'] as $tm2) : ?>
            <tr>
                <th scope="row"><?= $tm2['id_tm2']; ?></th>
                <td><?= $tm2['nama_pd']; ?></td>
                <td><?= $tm2['tgl_mulai']; ?></td>
                <td><?= $tm2['tgl_selesai']; ?></td>
                <td>
                    <?= $tm2['materi']; ?>
                </td>
                <td><?= $tm2['jml_peserta']; ?></td>
                <td>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>