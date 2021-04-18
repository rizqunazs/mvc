<div class="row">
    <div class="col"></div>
    <div class="col-6 mt-5 py-3 shadow rounded bg-light">
        <div class="container">
            <h1 style="text-align: center;">Ubah Data</h1>
            <form action="<?= BASEURL; ?>/lihatdata/update" method="post">
                <label class="form-label">Nama Room:</label>
                <input type="text" class="form-control" name="nama" value="<?= $data['mhs']['nama'] ?>">
                <label class="form-label">Harga:</label>
                <input type="password" class="form-control" name="harga">
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