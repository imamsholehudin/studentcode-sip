<div>
    <h3>Masukan Data Pimpinan</h3><br>
    <?php //var_dump($data); 
    ?>
    <form action="<?= BASEURL; ?>/PR/tambahData" method="POST">
        <div class="form-group">
            <label for="labelID">ID PR</label>
            <input type="text" class="form-control" id="id_pr" name="id_pr" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pimpinan Daerah</label>
            <select class="form-control" id="id_pd" name="id_pd">
                <?php foreach ($data['pd'] as $pd) : ?>
                <option value="<?= $pd['id_pd']; ?>"><?= $pd['nama_pd']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="labelnama">Nama PR</label>
            <input type="text" class="form-control" id="nama_pr" name="nama_pr">
        </div>
        <div class="form-group">
            <label for="labelalamat">Alamat</label>
            <input type="text" class="form-control" id="alamat_pr" name="alamat_pr">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>

</div>