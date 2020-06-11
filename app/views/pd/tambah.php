<div>
    <h3>Masukan Data Pimpinan</h3><br>
    <?php //var_dump($data); 
    ?>
    <form action="<?= BASEURL; ?>/PD/tambahData" method="POST">
        <div class="form-group">
            <label for="labelID">ID PD</label>
            <input type="text" class="form-control" id="id_pd" name="id_pd" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pimpinan Wilayah</label>
            <select class="form-control" id="id_pw" name="id_pw">
                <?php foreach ($data['pw'] as $pw) : ?>
                <option value="<?= $pw['id_pw']; ?>"><?= $pw['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="labelnama">Nama PD</label>
            <input type="text" class="form-control" id="nama_pd" name="nama_pd">
        </div>
        <div class="form-group">
            <label for="labelalamat">Alamat</label>
            <input type="text" class="form-control" id="alamat_pd" name="alamat_pd">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>

</div>