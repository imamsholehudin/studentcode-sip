<div class="mt-3">

    <h3>Masukan Data Pimpinan</h3><br>
    <form action="<?= BASEURL; ?>/PW/tambahData" method="POST">
        <div class="form-group">
            <label for="labelID">ID PW</label>
            <input type="text" class="form-control" id="id_pw" name="id_pw" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="labelnama">Nama PW</label>
            <input type="text" class="form-control" id="nama_pw" name="nama_pw">
        </div>
        <div class="form-group">
            <label for="labelalamat">Alamat</label>
            <input type="text" class="form-control" id="alamat_pw" name="alamat_pw">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>

</div>