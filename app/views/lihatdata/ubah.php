<div class="row">
    <div class="col"></div>
    <div class="col-6 mt-5 py-3 shadow rounded bg-light">
        <div class="container">
            <h1 style="text-align: center;">Ubah Data</h1>
            <form action="<?= BASEURL; ?>/lihatdata/update" method="post">
                <label class="form-label">Nama :</label>
                <input type="text" class="form-control" name="nama" value="<?= $data['mhs']['nama'] ?>">
                <label class="form-label">Password :</label>
                <input type="password" class="form-control" name="password">
                <label class="form-label">Jenis Kelamin</label> </br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                    <label class="form-check-label">Perempuan</label>
                </div> <br>
                <label class="form-label">Program Studi</label> </br>
                <select class="form-select" name="program_studi">
                    <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                    <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                </select>
                <label class="form-label">Keterangan</label>
                <input type="textarea" class="form-control" style="height: 100px" name="keterangan" value="<?= $data['mhs']['keterangan'] ?>"> <br>
                <input type="hidden" name="status" value="<?= $data['mhs']['status'] ?>">
                <input type="hidden" name="id" value="<?= $data['mhs']['id'] ?>">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="col"></div>
</div>