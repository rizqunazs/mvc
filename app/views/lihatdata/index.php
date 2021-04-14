<div class="row">
    <div class="col"></div>
    <div class="col-6 mt-5 py-3 shadow rounded bg-light">
        <div class="container">
            <h1 style="text-align: center;">Data Mahasiswa</h1>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL; ?>/lihatdata/hapus/<?= $mhs['id']; ?>" class="badge bg-danger rounded-pill float-end ms-1" onclick="return confirm('Apakah anda akan menghapus data ?')">hapus</a>
                        <a href="<?= BASEURL; ?>/lihatdata/ubah/<?= $mhs['id']; ?>" class="badge bg-success rounded-pill float-end ms-1" >edit</a>
                        <a href="<?= BASEURL; ?>/lihatdata/detail/<?= $mhs['id']; ?>" class="badge bg-primary rounded-pill float-end ms-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="col"></div>
</div>